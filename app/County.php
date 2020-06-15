<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $guarded = [];

    public function countyLocations()
    {
        return $this->hasMany(CountyLocation::class);
    }
}
