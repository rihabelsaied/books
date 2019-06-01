<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['language'=>'Arabic']);
        Language::create(['language'=>'English']);
        Language::create(['language'=>'Other']);

    }
}
