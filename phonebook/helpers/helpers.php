<?php

function site_url($route)
{
    return $_ENV['HOST'] . $route;
}

function asset_url($route = '')
{
    return site_url('assets/' . $route);
}

function view($path, $data = [])
{
    extract($data);
    $path = str_replace('.', '/', $path);
    $view_full_path = BASEPATH . "views/$path.php";
    include_once $view_full_path;
}

function xss_clean($str)
{
    return filter_var(htmlspecialchars($str));
}

function strCountains($str, $needle, $case_sensitive = 0)
{
    if ($case_sensitive)
        $pos = strpos($str, $needle);
    else
        $pos = stripos($str, $needle);

    return ($pos !== false) ? true : false;
}

function nice_dump($var)
{
    echo '<pre style="background: #d3efff; padding: 10px; border-radius: 10px; font-size: 18px; border: 1px solid #5da9e0;">';
    var_dump($var);
    echo '</pre>';
}

function nice_dd($var)
{
    nice_dump($var);
    die();
}
