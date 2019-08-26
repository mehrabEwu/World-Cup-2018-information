<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::create([
        	'name' => 			'Mehrab Shahriar',
        	'email' =>			'mehrab@gmail.com',
        	'password' => 		Hash::make('msr123'),
        	'remember_token' => str_random(10),


        ]);

    }
}
