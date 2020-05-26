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
    return view('home.index');
});

/* 
Booking Controller routing
Used to: create sessions for storing the form values
         store data before placing them in the database
*/ 

Route::resource('Booking','BookingController');
Route::view('/booking/sess', 'BookingController@sessStore');
Route::post('/booking/sess','BookingController@sessStore');

Route::get('/booking/create','BookingController@create');

Route::post('/booking/create','BookingController@store');



?>