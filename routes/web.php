<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/{task}', 'PostsController@show');
