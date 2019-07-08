<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include 'web1.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return '这是about页面';
// });
// /*Route::get('/content/id/{id}/page/{page}', function ($id,$page) {
// 	$sql = $id.'+'.$page;
//     return $sql;
// });*/
// //Route::get('/content/id/{id}', 'Newscontroller@getNews')->where(['id'=>'[0-9]+',]);
// Route::get('/content/{age}', 'Newscontroller@getNews')->middleware("check.age");

// Route::get('/product', 'Productcontroller@getProduct')->name('p');

// Route::resource('photos', 'PhotoController');

// /*Route::get('/read/{id}',"NewsController@Read");
// Route::get('/add',"NewsController@Add");
// Route::get('/edit/{id}',"NewsController@Edit");
// Route::get('/delete/{id}',"NewsController@Delete");
// Route::post('/save',"NewsController@Save");*/
// Route::resource('msg', 'MsgController');

// Route::get('setSession', 'Productcontroller@setSession');
// Route::get('getSession', 'Productcontroller@getSession');
// Route::get('delSession', 'Productcontroller@delSession');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
