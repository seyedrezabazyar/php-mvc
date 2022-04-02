<?php

define('BASEPATH', __DIR__ . "/../");

include BASEPATH . 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
