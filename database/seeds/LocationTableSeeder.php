<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create(['location_name'=>'Alex']);
        Location::create(['location_name'=>'Daqhalya']);
        Location::create(['location_name'=>'cairo']);
    }
}
