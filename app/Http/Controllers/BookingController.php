<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\CarDescription;
use App\CarType;
use App\User;

class BookingController extends Controller
{

	public function sessStore(Request $request){

			$request->input();
			$request->session()->put('pick_up_info', $request->input());

			/*$request->session()->keep([
				'pickup_location',
				'pickup_date',
				'pickup_time',
				'drop_off_location',
				'drop_off_date',
				'drop_off_time'
			]);

			print_r($request);*/
			return view('home.index');
	}

/*
#To be added  by Allen and Nyaga
    public function index(){
    	$booking = Booking::all()->toArray();
    	return view('home.index',compact('booking'));
    } 

    public function create(){
    	$car = \App\CarDescription::all();
    	$car_type = \App\CarType::all();
    	$user = \App\User::all();
    	return view('home.index');
    }

    public function store(Request $request){
	   $this->validate($request,[

	   		'pickup_location' => 'required',
			'pickup_date' => 'required',
			'pickup_time' => 'required',
			'drop_off_location' => 'required',
			'drop_off_date' => 'required' ,
			'drop_off_time' => 'required' 
	   ]);

	    $booking = new booking([
	    	'pickup_location' => $request->get('location'),
			'pickup_date' => $request->get('pickup_date'),
			'pickup_time' => $request->get('pickup_time'),
			'drop_off_location' => $request->get('drop_off_location'),
			'drop_off_date' => $request->get('drop_date') ,
			'drop_off_time' => $request->get('drop_time') 

	    ]);

	    $booking->save();
	    return redirect()->route('/')->with('succes',"Booking has been placed");	
   
    }
    public function show(){

    }


    public function update(Request $request , $id){

    }

    public function destroy(){
    	#$booking = Booking::find($)

    }

*/
}
