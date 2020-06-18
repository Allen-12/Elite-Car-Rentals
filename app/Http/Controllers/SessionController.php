<?php

namespace App\Http\Controllers;

use App\CarDescription;
use Illuminate\Http\Request;

class SessionController extends Controller
{
	public function storeLandingPageDetails()
    {
        \request()->validate([
            'countiesPickUp' => 'required',
            'countyLocationsPickup' => 'required',
            'pickup_date' => 'required',
            'pickup_time' => 'required',
            'countiesDropOff' => 'required',
            'countyLocationsDropOff' => 'required',
            'drop_off_date' => 'required',
            'drop_off_time' => 'required',
        ]);

        \request()->session()->put('pickUpCounty', request('countiesPickUp'));
        \request()->session()->put('pickUpCountyLocation', request('countyLocationsPickup'));
        \request()->session()->put('pickUpDate', request('pickup_date'));
        \request()->session()->put('pickUpTime', request('pickup_time'));
        \request()->session()->put('dropOffCounty', request('countiesDropOff'));
        \request()->session()->put('dropOffCountyLocation', request('countyLocationsDropOff'));
        \request()->session()->put('dropOffDate', request('drop_off_date'));
        \request()->session()->put('dropOffTime', request('drop_off_time'));

        return redirect('/bookings');
	}

    public function storeVehicles(CarDescription $carDescription)
    {
        $carDescription->load('carType');
        \request()->session()->put('vehicleSelected', $carDescription);
        return redirect('/bookings/summary');
//        dd(session()->all());
	}
}
