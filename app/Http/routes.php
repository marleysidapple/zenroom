<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'BookingController@index');

Route::get('booking/filter', 'BookingController@index');

Route::post('booking/filter', 'BookingController@updateData');

Route::post('booking/singleroom', 'BookingController@updateSingleRoom');

Route::post('booking/singleprice', 'BookingController@updateSinglePrice');

Route::post('booking/doubleroom', 'BookingController@updateDoubleRoom');

Route::post('booking/doubleprice', 'BookingController@updateDoublePrice');
