<?php

use Illuminate\Database\Seeder;

class CarDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CarDescription::class,20)->create();
    }
}
