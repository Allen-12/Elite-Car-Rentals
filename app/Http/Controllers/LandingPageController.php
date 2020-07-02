<?php

namespace App\Http\Controllers;

use App\County;
use App\CountyLocation;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
//        $counties = County::with('countyLocations')->get();
        $counties = County::pluck('county_name','id');
        $countyLocations = [];
//        dd($counties);

        return view('landing_page.index',compact('counties','countyLocations'));
    }

    public function getCountyLocations($countyID)
    {
//        dd($countyID);
        $countyLocations = CountyLocation::where('county_id',$countyID)->pluck('name','id');
        return json_encode($countyLocations);
    }

    public function sameDropOffLocationCounty($pickUpCountyID)
    {
        $pickUpCounty = County::where('id',$pickUpCountyID)->pluck('county_name','id');
        return json_encode($pickUpCounty);
    }

    public function sameDropOffLocationCountyLocation($pickUpCountyLocationID)
    {
        $pickUpCountyLocation = CountyLocation::where('id',$pickUpCountyLocationID)->pluck('name','id');
        return json_encode($pickUpCountyLocation);
    }
}
