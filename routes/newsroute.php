<?php
Route::get('/', 'NewsController@index');
Route::get('/about', 'NewsController@about');
Route::get('/news', 'NewsController@news');
Route::get('/show/{id}', 'NewsController@show');
Route::get('/msg', 'NewsController@msg');