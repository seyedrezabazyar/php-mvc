<?php
# front controller

include 'bootstrap/init.php';

// var_dump(\App\Core\Routing\Route::Routes());

$router = new App\Core\Routing\Router();
$router->run();
