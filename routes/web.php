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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('page1');
});
Route::get('halaman',function(){
	return view('halaman1');
});

Route::get('halaman1',function(){
	return view('halaman2');
});
Route::get('halaman2',function(){
	return view('halaman3');
});
