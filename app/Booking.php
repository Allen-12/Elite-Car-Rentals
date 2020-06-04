<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
		'pickup_location',
		'pickup_date',
		'pickup_time',
		'drop_off_location',
		'drop_off_date',
		'drop_off_time'

	];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(CarDescription::class);
    }
}
