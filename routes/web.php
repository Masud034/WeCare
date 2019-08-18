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

Route::get('/home', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/services', 'ServicesController@index');

Route::get('/terms', 'TermsController@index');

Route::get('/privacy', 'PrivacyController@index');

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@check');

Route::get('/register','RegisterController@register');

Route::post('/register','RegisterController@recieved');

Route::get('/logout', 'LogOutController@logout');

Route::get('/profile','ProfileController@view');

Route::get('/profile/edit', 'ProfileController@edit');

Route::post('/profile/edit', 'ProfileController@update');

Route::get('/service', 'ServiceController@addServiceForm');

Route::post('/service', 'ServiceController@store');

Route::get('/service-details/{user_id}/{service_id}', 'ServicesController@details');
