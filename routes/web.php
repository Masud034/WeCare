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

Route::get('/', 'WelcomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@check');

Route::get('/register','RegisterController@register');

Route::post('/register','RegisterController@recieved');

Route::get('/logout', 'LogOutController@logout');

