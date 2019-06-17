<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'Username' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 1,
            'password' => bcrypt('12345'),
            'location' =>'mans'
        ]);
    }
}
