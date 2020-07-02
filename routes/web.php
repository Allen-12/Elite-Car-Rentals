<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/emailpdf','BillingPDF@attachment_email');
Route::get('/', 'LandingPageController@index');
Route::get('countyLocations/{countyName}','LandingPageController@getCountyLocations');

// Booking Routes
Route::get('/bookings','BookingController@index');
Route::get('/bookings/summary','BookingController@summary');
Route::get('/bookings/completeBooking','BookingController@completeBooking')->middleware('auth');
Route::get('/bookings/edit','BookingController@edit');

// Session Routes
Route::post('/sessions/landingpage','SessionController@storeLandingPageDetails');
Route::get('/sessions/bookings/{carDescription}','SessionController@storeVehicles');

//User dashboard routes
Route::get('/user','UserDashboardController@index');
Route::get('/user/{id}','UserDashboardController@profile')->name('user.profile');
Route::get('/edit/user/','UserDashboardController@edit')->name('user.edit');
Route::post('/update/user/','UserDashboardController@update')->name('user.update');

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

Route::get('/admin/counties/create','CountyController@create');

Route::post('/admin/counties','CountyController@store');

Route::get('/admin/counties/{county}/countylocations/create','CountyLocationController@create');

Route::post('/admin/counties/{county}/countylocations','CountyLocationController@store');

Route::get('/mailpdf','BillingPDF@attachment_email');

// email_page is the route name i'm giving the view, let's see if it will work

Route::get('/about', function (){
    return view('about.about');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/summary/data','BillingPDF@getData');
