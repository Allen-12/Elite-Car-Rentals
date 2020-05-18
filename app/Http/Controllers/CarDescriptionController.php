<?php

namespace App\Http\Controllers;

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
            'availability' => 'required'
        ]);

        $carType->carDescriptions()->create($data);
        return redirect()->back();
    }
}
