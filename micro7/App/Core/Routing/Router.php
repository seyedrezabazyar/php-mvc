<?php

namespace App\Core\Routing;

use \App\Core\Request;
use App\Core\Routing\Route;

class Router
{
    private $request;
    private $routes;
    private $current_route;

    public function __construct()
    {
        $this->request = new Request;
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        // var_dump($this->current_route);
    }

    public function findRoute(request $request)
    {
        echo $request->method() . " " . $request->uri();
        foreach ($this->routes as $route) {
            if (in_array($request->method(), $route['methods']) && $request->uri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function run()
    {
        # 405 : invalid request method

        #404 : uri not exist

        # action : null

        # action : clousure

        # action : Controller@Method

        # action : ['Controller','Method']
    }
}
