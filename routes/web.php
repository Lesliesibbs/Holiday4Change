<?php

/*
|--------------------------------------------------------------------------
| Web Routes, Test1
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loadsed by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
