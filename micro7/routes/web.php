<?php

use App\Core\Routing\Route;

// Route::add('get', '/null');
Route::get('/null');

Route::add(['get', 'post'], '/', function () {
    echo 'Welcome';
});

Route::post('/saveForm', function () {
    echo 'Save OK';
});

Route::put('/pururi', ['Controller', 'Method']);

Route::get('/pururi', 'Controller@Method');
