<?php
Route::group(['prefix'=>'admin'],function(){
	Route::get('producttypeadd',function(){
		return view('admin.products,Prod')
	})
});