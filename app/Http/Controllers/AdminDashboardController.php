<?php

namespace App\Http\Controllers;

use App\CarType;
use App\County;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $carTypes = CarType::all();
        $counties = County::all();

        return view('admin_dashboard.index',compact('carTypes','counties'));
    }
}
