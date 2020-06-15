<?php

use Illuminate\Database\Seeder;
use \App\CarType;

class CarTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carType1 = new CarType();
        $carType1->name = "Saloon Car";
        $carType1->save();

        $carType2 = new CarType();
        $carType2->name = "SUV";
        $carType2->save();

        $carType3 = new CarType();
        $carType3->name = "Double Cabin";
        $carType3->save();

        $carType4 = new CarType();
        $carType4->name = "Van";
        $carType4->save();
    }
}
