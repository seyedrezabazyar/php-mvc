<?php

use App\Core\Routing\Route;

Route::get('/', 'HomeController@index');
Route::get('/archive', 'ArchiveController@index');


Route::add(['get', 'post', 'put'], '/a', function () {
    echo 'Welcome';
});

Route::get('/b', function () {
    echo 'Save OK';
});

Route::put('/c', ['Controller', 'Method']);

Route::get('/d', 'Controller@Method');
