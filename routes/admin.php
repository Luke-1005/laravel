<?php

Route::group(['prefix'=>'admin/product'],function(){
	Route::get('typeadd','ProductTypeController@index');
	Route::post('typeadd','ProductTypeController@store');
});