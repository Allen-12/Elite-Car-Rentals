<?php

namespace App\Http\Controllers;

use App\CarType;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $carTypes = CarType::all();

        return view('admin_dashboard.index',compact('carTypes'));
    }
}
