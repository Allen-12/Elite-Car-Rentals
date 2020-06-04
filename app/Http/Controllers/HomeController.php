<?php

namespace App\Http\Controllers;

use App\County;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $counties = County::with('countyLocations')->get();

        return view('home.index',compact('counties'));
    }
}
