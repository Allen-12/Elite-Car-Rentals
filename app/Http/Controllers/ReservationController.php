<?php

namespace App\Http\Controllers;

use App\CarDescription;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $vehicles = CarDescription::with('carType')->get();
//        dd($vehicles);
        return view('reservation_process.index',compact('vehicles'));
    }
}
