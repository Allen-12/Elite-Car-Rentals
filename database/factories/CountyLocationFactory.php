<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CountyLocation;
use Faker\Generator as Faker;

$factory->define(CountyLocation::class, function (Faker $faker)
{
    return [
        'county_id' =>App\County::inRandomOrder()->first()->id,
        'name' => $faker->city,
    ];
});
