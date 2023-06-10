<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
   public function index(){
    echo 'home controller is working..';
   }
   public function aboutus(){
    echo 'aboutus us method is working..';
   }

}
