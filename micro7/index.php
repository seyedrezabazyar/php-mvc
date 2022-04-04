<?php
# front controller

use App\Core\StupidRouter;

include 'bootstrap/init.php';

$router = new StupidRouter();
$router->run();
