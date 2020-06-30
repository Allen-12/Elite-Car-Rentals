<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarDescription extends Model
{
    protected $guarded = [];

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
