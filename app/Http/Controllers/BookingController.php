<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\CarDescription;
use App\County;
use App\CountyLocation;
use Illuminate\Http\Request;

class BookingController extends Controller
{

//    /**
//     * BookingController constructor.
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
        $sessionData = session()->all();
        $pickUpCounty = County::where('id',$sessionData['pickUpCounty'])->get();
        $pickUpCountyLocation = CountyLocation::where('id',$sessionData['pickUpCountyLocation'])->get();
        $dropOffCounty = County::where('id',$sessionData['dropOffCounty'])->get();
        $dropOffLocation = CountyLocation::where('id',$sessionData['dropOffCountyLocation'])->get();

        $date1= Carbon::parse($sessionData['pickUpDate']);
        $date2=  Carbon::parse($sessionData['dropOffDate']);
        $date_diff = $date1->diffInDays($date2);

        $locations = array(
          "pickUpCounty" => $pickUpCounty,
          "pickUpCountyLocation" => $pickUpCountyLocation,
          "dropOffCounty" => $dropOffCounty,
          "dropOffCountyLocation" => $dropOffLocation
        );
        $vehicles = json_decode($sessionData['vehicleSelected'], true);
        $total_price= ($vehicles['base_price_per_day']*$date_diff);
        \request()->session()->put('totalPrice', $total_price);
        \request()->session()->put('duration', $date_diff);
//         dd($vehicles);
        return view('booking.summary',compact('vehicles','sessionData','locations','date_diff','total_price'));
    }

    public function completeBooking()
    {
        return view('mails.mymail');
    }
}
