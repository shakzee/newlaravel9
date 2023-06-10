<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;
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


Route::get('/',[User::class,'index']);
Route::get('/users/{user}', [User::class, 'user'])->name('user');
// Route::get('/{user}', function ($id) {
//     return view('welcome',['data'=>$id]);
// })->name('root');

//  Route::get('/home',[Home::class,'aboutus']);

// Route::match(['get','post'],'/about',function(){
//     echo 'get post..';
// });

// Route::any('/user',function(){
//     echo 'get or post..';
// });
