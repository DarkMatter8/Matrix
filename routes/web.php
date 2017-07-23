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

Route::post('/ServiceLogin', 'AuthController@do_login');
Route::post('/ServiceRegister', 'AuthController@do_register');
Route::get('/logout', 'AuthController@do_logout');

Route::group(['namespace' => 'Player', 'prefix' => 'player'], function () {
    
    Route::get('/home', 'PlayerController@home');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    
    Route::get('/home', 'AdminController@home');
    Route::resource('questions', 'QuestionController');
});