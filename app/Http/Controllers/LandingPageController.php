<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
	public function sessionStore()
    {
        \request()->session()->put('pickUpLocation', request('pickup_location'));
        \request()->session()->put('pickUpDate', request('pickup_date'));
        \request()->session()->put('pickUpTime', request('pickup_time'));
        \request()->session()->put('dropOffLocation', request('drop_off_location'));
        \request()->session()->put('dropOffDate', request('drop_off_date'));
        \request()->session()->put('dropOffTime', request('drop_off_time'));
        return redirect()->back();
	}
}
