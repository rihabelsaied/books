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


        $this->call(locationTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(AdminTableSeeder::class);



    }
}
