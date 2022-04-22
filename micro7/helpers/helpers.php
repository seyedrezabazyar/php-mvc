<?php

function site_url($route)
{
    return $_ENV['HOST'] . $route;
}

function asset_url($route)
{
    return site_url('assets/' . $route);
}

function view($path, $data = []) #errors.404
{
    extract($data);
    $path = str_replace('.', '/', $path);
    $view_full_path = BASEPATH . "views/$path.php";
    include_once $view_full_path;
}
