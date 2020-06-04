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

<<<<<<< HEAD

/*Route::get('/reservation', function () {
  return view('reservation_process.vehicle_reservation');
});
*/



=======
>>>>>>> 90d50377cccc5c258d171c19f817591afab861f2
Route::get('/reservations','ReservationController@index');



// Elite Administrator Routes
Route::get('/admin','AdminDashboardController@index');

Route::get('/admin/cartypes/create','CarTypeController@create');

Route::post('/admin/cartypes','CarTypeController@store');

Route::get('/admin/cartypes/{carType}/edit','CarTypeController@edit');

Route::patch('/admin/cartypes/{carType}','CarTypeController@update');

Route::get('/admin/cartypes/{carType}/cardescription/create','CarDescriptionController@create');

Route::post('/admin/cartypes/{carType}/cardescription','CarDescriptionController@store');

Route::get('/admin/cartypes/{carType}/cardescriptions','CarDescriptionController@index');

Route::get('/admin/cardescriptions/{carDescription}/edit','CarDescriptionController@edit');

Route::patch('/admin/cardescriptions/{carDescription}','CarDescriptionController@update');
<<<<<<< HEAD

Route::get('pdf', function () {
    return view('pdf');
});

Route::get('email_demo', function () {
    return view('email_demo');
});

Route::view('email_page','email_demo');

Route::get('mailpdf','BillingPDF@attachment_email');
=======
>>>>>>> 90d50377cccc5c258d171c19f817591afab861f2
