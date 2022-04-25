<?php
# front controller
include 'bootstrap/init.php';

$router = new App\Core\Routing\Router();
$router->run();

// $route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/';
// $route = '/post/{slug}';

// $pattern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route) . "$/";

// nice_dump($route);
// nice_dump($pattern);
// nice_dump('/^\/post\/(?<slug>[-%\w]+)$/');

// $uri1 = '/post/what-is-php';
// $uri2 = '/post/what-is-laravel';
// $uri3 = '/product/what-is-php';

// $result = preg_match($route_pattern, $uri1, $matches);
// nice_dump($result);
// nice_dump($matches);
