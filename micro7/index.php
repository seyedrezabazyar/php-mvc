<?php
# front controller

include 'bootstrap/init.php';

$router = new App\Core\Routing\Router();
$router->run();
