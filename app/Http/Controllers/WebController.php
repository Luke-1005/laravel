<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;	//share 引用
use App\User;
use App\Phone;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    //
    public function __construct(){
    	view::share('title','默认值');
    }
    public function index(){
        /*$phone = User::find(1)->phone;
        dd($phone);*/
        /*$p = new Phone();
        $p->user_id = 7;*/
        //$p=Phone::where('phone',777)->first();
        //$p->phone = 777;
        //$p->delete();
        /*$p = Phone::all();
        return $p->sum('id');*/
        /*$p = Phone::all();
        return$p->toArray();*/
        /*$user = User::find(2);
        $user->email = '更新后的email1';
        //return $user->userOne;
        $user->userOne->phone = '更新PHONE1';
        $user->userOne->save();
        $user->save();
        return 'OK';*/
        $user = DB::table('phones')->pluck('phone');
        return $user;

    }
    public function about(){
    	return view('about');
    }
    public function content(){
    	
    }
    public function news(){
    	
    }
    public function msg(){

    }
}
