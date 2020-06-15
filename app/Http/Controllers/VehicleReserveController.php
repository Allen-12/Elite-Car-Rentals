<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;

class VehicleReserveController extends Controller
{
    public function index()
    {
        $vehicles = DB::select('select * from car_description');
//        dd($vehicles);
        return view('reservation_process.vehicle_cards', compact('vehicles'));
    }
}
