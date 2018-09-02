<?php

/*
|--------------------------------------------------------------------------
| Web Routes, Test 2
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/love2shop', 'Love2ShopController@index');

Route::get('/about', 'AboutController@index');

Route::get('/login-register', 'LoginRegisterController@index');

Route::get('/profile', 'ProfileController@index');

/*Route::get('/competition2', 'CompetitionController@index');*/

Route::get('/competition', 'CompetitionController2@index');

Route::get('/payments', 'PaymentsController@index');

Route::get('/change-password', 'ChangePasswordController@index');

Auth::routes();


Route::get('/home', [
  'uses' => 'AdminController@index',
  'as' => 'home'
]);

Route::get('/roles', [
  'uses' => 'UsersController@index',
  'as' => 'roles'
]);

Route::get('/competition2', [
  'uses' => 'CompetitionController@index',
  'as' => 'competition'
]);

Route::get('/email', [
  'uses' => 'EmailController@index',
  'as' => 'email'
]);

Route::get('/calendar', [
  'uses' => 'CalendarController@index',
  'as' => 'calendar'
]);

/*
Route::get('/home', 'AdminController@index')->name('home');

Route::get('/roles', 'UsersController@index')->name('users');

Route::get('/email', 'EmailController@index')->name('email');

Route::get('/calendar', 'CalendarController@index')->name('calendar');

 Route::get('/competition2', 'CompetitionController@index')->name('competition');

 */
