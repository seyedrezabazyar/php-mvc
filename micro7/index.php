<?php
# front controller

include 'bootstrap/init.php';

// var_dump(\App\Core\Routing\Route::Routes());

// $router = new App\Core\Routing\Router();
// $router->run();


// $route = '/post/{slug}';
$route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';
$uri1 = '/post/what-is-php';
$uri2 = '/post/what-is-laravel';
$uri3 = '/product/what-is-php';

// $result = preg_match($route_pattern, $uri1);
// nice_dump($result);

// $result = preg_match($route_pattern, $uri3);
// nice_dump($result);

$result = preg_match($route_pattern, $uri1, $matches);
nice_dump($result);
nice_dump($matches);
