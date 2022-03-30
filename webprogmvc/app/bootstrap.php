<?php

// Load Config
require_once 'config/config.php';

// include_once 'libraries/Core.php';
// include_once 'libraries/Controller.php';
// include_once 'libraries/Database.php';


function webprog_mvc($classname)
{
    include_once 'libraries/' . $classname . '.php';
}

spl_autoload_register('webprog_mvc');
