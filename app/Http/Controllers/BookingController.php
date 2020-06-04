<?php

namespace App\Http\Controllers;

use App\CarDescription;
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
//        dd($sessionData['pickUpDate']);
        return view('booking.index',compact('vehicles','sessionData'));
    }
}
