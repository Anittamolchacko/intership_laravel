<?php

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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('my_profile',function(){
return view('profile');
});
Route::get('/my_contact',function(){
    return view('contact');
});
Route::get('/my_regform',function(){
    return view('regform');
});
