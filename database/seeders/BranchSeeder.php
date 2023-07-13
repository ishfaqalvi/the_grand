<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
        	['name' => 'Bradfoard', 'slug' => 'bradfoard','image' => 'upload/images/branches/4.jpg'],
        	['name' => 'Dewsbury', 	'slug' => 'dewsbury','image' => 'upload/images/branches/7.jpg']
        ]);
    }
}
