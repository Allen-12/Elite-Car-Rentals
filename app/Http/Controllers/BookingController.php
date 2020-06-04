<?php

namespace App\Http\Controllers;

use App\CarDescription;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $vehicles = CarDescription::with('carType')->get();
//        dd($vehicles);
        return view('booking.index',compact('vehicles'));
    }
}
