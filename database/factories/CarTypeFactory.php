<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarType;
use Faker\Generator as Faker;

$factory->define(CarType::class, function (Faker $faker)
{
    $faker->addProvider(new Fakecar($faker));
    return [

    ];
});
