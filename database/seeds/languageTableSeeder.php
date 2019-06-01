<?php

use Illuminate\Database\Seeder;

class languageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Language::create(['language'=>'arabic']);
        \App\Language::create(['language'=>'english']);
        \App\Language::create(['language'=>'other']);
    }
}
