<?php

namespace App\Http\Controllers;

use App\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    public function create()
    {
        $carTypes = CarType::all();
        return view('car_type.create',compact('carTypes'));
    }

    public function store()
    {
        $data =\request()->validate([
            'name' => 'required'
        ]);

        CarType::create($data);

        return redirect()->back();
    }

    public function edit(CarType $carType)
    {
        return view('car_type.edit',compact('carType'));
    }

    public function update(CarType $carType)
    {
        $data = \request()->validate([
           'name' => 'required'
        ]);

        $carType->update($data);

        return redirect('/admin/cartypes/create');
    }
}
