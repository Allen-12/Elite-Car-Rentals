<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public function countyLocations()
    {
        return $this->hasMany(CountyLocation::class);
    }
}
