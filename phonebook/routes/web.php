<?php

use App\Core\Routing\Route;

Route::get('/', 'HomeController@index');

Route::post('/contact/add', 'ContactController@add');

// Route::get('/panel', 'PanelController@index', [Author::Class]);
// Route::get('/', 'HomeController@index');
// Route::get('/post/{slug}', 'PostController@single');
// Route::get('/post/{slug}/comment/{cid}', 'PostController@comment');
// Route::get('/todo/list', 'TodoController@list', [BlockChrome::class, BlockIE::class]);
// Route::get('/todo/add', 'TodoController@add');
// Route::get('/todo/remove', 'TodoController@remove');
// Route::get('/archive', 'ArchiveController@index');
// Route::get('/archive/articles', 'ArchiveController@articles');
// Route::get('/archive/products', 'ArchiveController@products');