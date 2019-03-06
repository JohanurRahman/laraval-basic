<?php

// Route::get('/hello', function() {
//     return 'Hello World';
// });

// Route::get('/users/{id}/{name}', function($id, $name) {
//     return 'This is user ' . $name . ' with an id of ' . $id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
