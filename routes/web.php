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

Route::get('/', function ()
{
    return view('home.index');
});

/*
Booking Controller routing
Used to: create sessions for storing the form values
         store data before placing them in the database
*/

Route::post('/bookings/startReservation','LandingPageController@sessionStore');

Route::get('/bookings/create','LandingPageController@create');

Route::post('/bookings/create','LandingPageController@store');

Route::resource('Booking','LandingPageController');
Route::view('/bookings/sess', 'LandingPageController@sessStore');


?>
