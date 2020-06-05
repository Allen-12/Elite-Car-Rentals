<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountyLocation extends Model
{
    protected $guarded = [];

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
