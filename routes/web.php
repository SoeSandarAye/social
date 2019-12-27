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






Route::resource('active','ActiveController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/user/logout', 'LoginuserController@logout')->name('logouts');

Route::resource('/user','LoginuserController');
