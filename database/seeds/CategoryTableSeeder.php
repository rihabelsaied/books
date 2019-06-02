<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['name'=>'Drama']);
        \App\Category::create(['name'=>'Art ']);
        \App\Category::create(['name'=>'Science fiction ']);
        \App\Category::create(['name'=>'Romance']);
        \App\Category::create(['name'=>'Travel ']);
    }

}
