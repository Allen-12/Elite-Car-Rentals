<?php

use Illuminate\Database\Seeder;

class CountyLocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CountyLocation::class,15)->create();
    }
}
