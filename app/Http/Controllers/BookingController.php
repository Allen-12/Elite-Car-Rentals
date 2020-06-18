<?php

namespace App\Http\Controllers;

use App\CarDescription;
use App\County;
use App\CountyLocation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $vehicles = CarDescription::with('carType')
                    ->where('availability','=','1')
                    ->get();
//
        $sessionData = session()->all();
        $pickUpCounty = County::where('id',$sessionData['pickUpCounty'])->get();
        $pickUpCountyLocation = CountyLocation::where('id',$sessionData['pickUpCountyLocation'])->get();
        $dropOffCounty = County::where('id',$sessionData['dropOffCounty'])->get();
        $dropOffLocation = CountyLocation::where('id',$sessionData['dropOffCountyLocation'])->get();
        $locations = array(
            "pickUpCounty" => $pickUpCounty,
            "pickUpCountyLocation" => $pickUpCountyLocation,
            "dropOffCounty" => $dropOffCounty,
            "dropOffCountyLocation" => $dropOffLocation
        );
//        dd($locations['dropOffCounty'][0]->county_name);
        return view('booking.index',compact('vehicles','sessionData','locations'));
    }

    public function summary()
    {
        return "Summary view to be loaded here";
    }
}
