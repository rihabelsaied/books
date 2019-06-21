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
        \App\Category::create(['name'=>'Drama','image'=>'in.jpg']);
        \App\Category::create(['name'=>'Art','image'=>'index.jpeg']);
        \App\Category::create(['name'=>'Science fiction','image'=>'images.jpeg']);
        \App\Category::create(['name'=>'Romance','image'=>'i.png']);
        \App\Category::create(['name'=>'Travel','image'=>'t.webp']);
        \App\Category::create(['name'=>'History','image'=>'h.webp']);
        \App\Category::create(['name'=>'Programming','image'=>'p.webp']);
        \App\Category::create(['name'=>'Health & fitness','image'=>'i.png']);
        \App\Category::create(['name'=>'Medical','image'=>'n0.jpeg']);
        \App\Category::create(['name'=>'Literature & fiction','image'=>'n4.jpeg']);
        \App\Category::create(['name'=>'Religion','image'=>'n9.jpeg']);

        \App\Category::create(['name'=>'Mysteries','image'=>'m.webp']);



    }

}
