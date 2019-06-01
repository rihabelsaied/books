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
        Category::create(['name'=>'Drama']);
        Category::create(['name'=>'Art ']);
        Category::create(['name'=>'Science fiction ']);
        Category::create(['name'=>'Romance']);
        Category::create(['name'=>'Travel ']);




    }
}
