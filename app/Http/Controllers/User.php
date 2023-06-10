<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function user($user){
        //dd($user);
        return view('welcome',['data'=>$user]);
    }

}
