<?php

namespace App\Http\Controllers;

use App\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    public function create()
    {
        $counties = County::all();
        return view('admin_county.create',compact('counties'));
    }

    public function store()
    {
        $data = \request()->validate([
            'county_name' => 'required'
        ]);

        County::create($data);

        return redirect()->back();
    }
}
