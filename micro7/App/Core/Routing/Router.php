<?php

namespace App\Core\Routing;

use \App\Core\Request;
use App\Core\Routing\Route;
use Exception;

class Router
{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = '\App\Controllers\\';

    public function __construct()
    {
        $this->request = new Request;
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;

        # run middleware here
        $this->run_route_middleware();
    }

    private function run_route_middleware()
    {
        // var_dump($this->current_route['middleware']);
        $middleware = $this->current_route['middleware'];
        foreach ($middleware as $middleware_class) {
            $middleware_obj = new $middleware_class;
            $middleware_obj->handle();
        }
    }

    public function findRoute(request $request)
    {
        foreach ($this->routes as $route) {
            if (in_array($request->method(), $route['methods']) && $request->uri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function dispatch404()
    {
        header("HTTP/1.1 404 Not Found");
        view('errors.404');
        die();
    }

    public function run()
    {
        # 405 : invalid request method
        // if($this->invalidRequest->($this->request)){
        //     $this->dispatch405();
        // }

        # 404 : uri not exist
        if (is_null($this->current_route)) {
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);
    }

    private function dispatch($route)
    {
        $action = $route['action'];

        # action : null
        if (is_null($action) || empty($action)) {
            return;
        }

        # action : clousure
        if (is_callable($action)) {
            $action();
            // call_user_func($action);
        }

        # action : Controller@Method
        if (is_string($action)) {
            $action = explode('@', $action);
        }

        # action : ['Controller','Method']
        if (is_array($action)) {
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];

            if (!class_exists($class_name))
                throw new \Exception("Class $class_name Not Exists!");

            $controller = new $class_name();

            if (!method_exists($controller, $method))
                throw new \Exception("Method $method Not Exists in class $class_name!");

            $controller->{$method}();
        }
    }
}
