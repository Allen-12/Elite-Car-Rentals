<?php

use Illuminate\Database\Seeder;
use App\CarType;

class CarTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carType = new CarType();

        $carType->name = "SUV";
        $carType->save();
    }
}
