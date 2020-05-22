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