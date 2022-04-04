<?php

namespace App\Utilities;

# http://localhost/github/php-mvc/micro7/assets/css/style.css
class Url
{
    public static function current()
    {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
}
