<?php

namespace App\Http\Controllers;

use App\County;
use App\CountyLocation;
use Illuminate\Http\Request;

class CountyLocationController extends Controller
{
    public function create(County $county)
    {
        $countyLocations = $county->load('countyLocations');
//        dd($countyLocations);

        return view('admin_county_location.create',compact('county','countyLocations'));
    }

    public function store(County $county)
    {
        $data = \request()->validate([
           'name' => 'required'
        ]);

        $county->countyLocations()->create($data);

        return redirect()->back();
    }
}
