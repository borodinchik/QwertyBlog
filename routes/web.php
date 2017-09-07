<?php
Route::get('/', 'PostsController@index');
Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Likes route
Route::get('product/like/{id}' , 'LikeController@likeProduct');
Route::get('posts/like/{id}' , 'LikeController@likePost');
