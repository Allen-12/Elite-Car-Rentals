<?php

namespace App\Http\Controllers;

use App\CarDescription;
use App\CarType;
use Illuminate\Http\Request;

class CarDescriptionController extends Controller
{
    public function create(CarType $carType)
    {
        return view('car_description.create',compact('carType'));
    }

    public function store(CarType $carType)
    {
        $data = \request()->validate([
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'number_plate' => 'required',
            'base_price_per_day' => 'required',
            'availability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        $newCarType = $carType->carDescriptions()->create($data);
        $newCarType->update([
            'image' => \request()->image->store('vehicle_images','public'),
        ]);
        return redirect()->back();
    }

    public function index(CarType $carType)
    {
        $vehicles = CarDescription::where('car_type_id','=',$carType->id)->get();
        dd($vehicles);
        return view('car_description.index',compact('vehicles'));
    }
}
