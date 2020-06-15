<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarTypeTableSeeder::class);
        $this->call(CarDescriptionTableSeeder::class);
        $this->call(CountyTableSeeder::class);
        $this->call(CountyLocationTableSeeder::class);
    }
}
