<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	function getProduct(){
		echo  '数据库';

		return view('product');
	}
	public function setSession(){
		//Session(['userName'=>'zs','pwd'=>'66']);
		session()->flash('userName','zs');
	}
	public function getSession(){
		echo session('userName', 'default');
		echo session('pwd');
	}
	public function delSession(Request $request){
		//echo Session('userName');
		$request->session()->forget('userName');
		//echo session('userName', 'default');
		//echo Session('isLogin','ls');
		//Session::flush();
		//var_dump(Session());
	}
}