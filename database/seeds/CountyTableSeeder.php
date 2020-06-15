<?php

use Illuminate\Database\Seeder;
use \App\County;

class CountyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $county1 = new County();
        $county1->county_name = "Nairobi";
        $county1->save();

        $county2 = new County();
        $county2->county_name = "Mombasa";
        $county2->save();

        $county3 = new County();
        $county3->county_name = "Kisumu";
        $county3->save();
    }
}
