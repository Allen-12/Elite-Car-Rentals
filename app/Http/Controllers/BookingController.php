<?php

namespace App\Http\Controllers;

use App\Booking;
use Carbon\Carbon;
use App\CarDescription;
use App\County;
use App\CountyLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        if(Auth::check())
        {
            $pickUpDate = \request()->session()->get('pickUpDate');
            $pickUpDateConverted = date("Y-m-d", strtotime($pickUpDate));
            $dropOffDate = \request()->session()->get('dropOffDate');
            $dropOffDateConverted = date("Y-m-d", strtotime($dropOffDate));
            $vehicleSelected = \request()->session()->get('vehicleSelected');

            $data = [
                "user_id" => Auth::id(),
                "car_description_id" => $vehicleSelected->id,
                "pickup_location" => \request()->session()->get('pickUpCountyLocation'),
                "pickup_date" => date("Y-m-d", strtotime($pickUpDate)),
                "pickup_time" => \request()->session()->get('pickUpTime'),
                "drop_off_location" => \request()->session()->get('dropOffCountyLocation'),
                "drop_off_date" => date("Y-m-d", strtotime($dropOffDate)),
                "drop_off_time" => \request()->session()->get('dropOffTime'),
                "total_cost" => \request()->session()->get('totalPrice')
            ];

            $bookings = Booking::where('car_description_id',$vehicleSelected->id)->get();
            $booked = false;
            foreach ($bookings as $booking)
            {
                if ($booking->pickup_date == $pickUpDateConverted || $booking->drop_off_date == $dropOffDateConverted)
                {
                    $booked = true;
                    return redirect()->action('LandingPageController@index')->with('status','Invalid Booking! Please pick a different pickup date and drop off date');
//                    dd($booked);
                }
            }

            if($booked == false)
            {
//                dd($booked);
                Booking::create($data);
            }
        }
        return view('mails.mymail');
    }
}
