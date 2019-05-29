<?php

use Illuminate\Database\Seeder;

class locationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Location::create(['location_name'=>'cairo']);
        \App\Location::create(['location_name'=>'Alex']);
        \App\Location::create(['location_name'=>'Daqhalya']);
        \App\Location::create(['location_name'=>'Aswan']);
        \App\Location::create(['location_name'=>'Asyut']);
        \App\Location::create(['location_name'=>'Beheira']);
        \App\Location::create(['location_name'=>'DAmietta']);
        \App\Location::create(['location_name'=>'faiyum']);
        \App\Location::create(['location_name'=>'Gharbia']);
        \App\Location::create(['location_name'=>'Giza']);
        \App\Location::create(['location_name'=>'Ismailia']);
        \App\Location::create(['location_name'=>'Kafr El-Sheikh']);
        \App\Location::create(['location_name'=>'Luxor']);
        \App\Location::create(['location_name'=>'Matruh']);
        \App\Location::create(['location_name'=>'Minya']);
        \App\Location::create(['location_name'=>'Monufia']);
        \App\Location::create(['location_name'=>'Alwady Elgedeed']);
        \App\Location::create(['location_name'=>'Sinai']);
        \App\Location::create(['location_name'=>'Port Said']);
        \App\Location::create(['location_name'=>'Elbahr Elahmar']);
        \App\Location::create(['location_name'=>'Suez']);
        \App\Location::create(['location_name'=>'Sohag']);
        \App\Location::create(['location_name'=>'Sharqia']);
        \App\Location::create(['location_name'=>'Qena']);
        \App\Location::create(['location_name'=>'Qalubia']);




    }
}
