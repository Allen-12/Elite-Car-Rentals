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

Route::get('pdf','BillingPDF@generate');
=======
//Route::get('pdf','BillingPDF@generate');

Route::get('pdf', function () {
    return view('pdf');
});

Route::get('email_demo', function () {
    return view('email_demo');
});

Route::view('email_page','email_demo');

Route::get('mailpdf','BillingPDF@attachment_email');

// email_page is the route name i'm giving the view, let's see if it will work  
>>>>>>> 499414d3c84605ad218a897c0f13c1e843563c01
