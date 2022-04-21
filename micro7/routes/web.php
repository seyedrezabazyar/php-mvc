<?php

use App\Core\Routing\Route;

Route::get('/null');

Route::add(['get', 'post'], '/github/php-mvc/micro7/a', function () {
    echo 'Welcome';
});

Route::post('/github/php-mvc/micro7/b', function () {
    echo 'Save OK';
});

Route::put('/github/php-mvc/micro7/c', ['Controller', 'Method']);

Route::get('/github/php-mvc/micro7/d', 'Controller@Method');
