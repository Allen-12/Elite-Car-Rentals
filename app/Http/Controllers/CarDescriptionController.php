<?php

namespace App\Http\Controllers;

use App\CarDescription;
use App\CarType;
use Illuminate\Http\Request;

class CarDescriptionController extends Controller
{
    public function create(CarType $carType)
    {
        return view('admin_car_description.create',compact('carType'));
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
        return redirect('/admin/cartypes/'.$carType->id.'/cardescriptions');
    }

    public function index(CarType $carType)
    {
        $vehicles = CarDescription::where('car_type_id','=',$carType->id)->get();
//        dd($vehicles);
        return view('admin_car_description.index',compact('vehicles'));
    }

    public function edit(CarDescription $carDescription)
    {
//        dd($carDescription);
        return view('admin_car_description.edit',compact('carDescription'));
    }

    public function update(CarDescription $carDescription)
    {
        $data = \request()->validate([
            'make' => 'required',
            'model' => 'required',
            'colour' => 'required',
            'number_plate' => 'required',
            'base_price_per_day' => 'required',
            'availability' => 'required',
        ]);

        if (\request()->hasFile('image'))
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
        }
//        dd($carDescription);
        $carDescription->update($data);

        return redirect('/admin/cartypes/'.$carDescription->car_type_id.'/cardescriptions');
    }
}
