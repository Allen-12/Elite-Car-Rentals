<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarDescription;
use Faker\Generator as Faker;
use Faker\Provider\Fakecar;

function randomImage()
{
    $images = [
        '/cars_images/car-1.jpg',
        '/cars_images/car-2.jpg',
        '/cars_images/car-4.jpg',
        '/cars_images/car-5.jpg',
        '/cars_images/car-6.jpg',
        '/cars_images/car-7.jpg',
        '/cars_images/car-8.jpg',
        '/cars_images/car-9.jpg',
        '/cars_images/car-10.jpg',
        '/cars_images/car-11.jpg',
        '/cars_images/car-12.jpg',
    ];
    $image = array_rand($images);
    return $images[$image];
}

$factory->define(CarDescription::class, function (Faker $faker)
{

    $faker->addProvider(new Fakecar($faker));
    return [
        'car_type_id' =>App\CarType::inRandomOrder()->first()->id,
        'make' => $faker->vehicleBrand,
        'model' => $faker->vehicleModel,
        'colour' => $faker->hexColor,
        'number_plate' => $faker->vin,
        'availability' => $faker->randomElement([0,1]),
        'base_price_per_day' => $faker->numberBetween(1000,10000),
        'image' => randomImage(),
    ];
});
