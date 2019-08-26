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

Route::get('/login', 'LoginController@login')->middleware('guest')->name('login');

Route::post('/login', 'LoginController@check')->middleware('guest');

Route::get('/register','RegisterController@register')->middleware('guest');

Route::post('/register','RegisterController@recieved')->middleware('guest');

Route::get('/logout', 'LogOutController@logout')->middleware('auth');

Route::get('/profile','ProfileController@view')->middleware('auth');

Route::get('/profile/edit', 'ProfileController@edit')->middleware('auth');

Route::post('/profile/edit', 'ProfileController@update')->middleware('auth');

Route::get('/service', 'ServiceController@addServiceForm')->middleware('auth');

Route::post('/service', 'ServiceController@store')->middleware('auth');

Route::get('/service-details/{user_id}/{service_id}', 'ServicesController@details');

Route::get('/booking', 'BookingController@show')->middleware('auth');

Route::post('/booking', 'BookingController@store')->middleware('auth');

Route::post('/payment-gateway-resposne', 'BookingController@paymentGatewayResponse');

Route::get('rate-service/booking/{booking_id}/rating/{rating}', 'BookingController@rate')->middleware('auth');
