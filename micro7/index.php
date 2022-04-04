<?php
# front controller

use App\Utilities\Url;

include 'bootstrap/init.php';

$route = Url::current_route();

# $route = /colors/red && /colors/green && /colors/blue

if ($route == '/github/php-mvc/micro7/colors/red')
    include BASEPATH . 'views/colors/red.php';

if ($route == '/github/php-mvc/micro7/colors/green')
    include BASEPATH . 'views/colors/green.php';

if ($route == '/github/php-mvc/micro7/colors/blue')
    include BASEPATH . 'views/colors/blue.php';
