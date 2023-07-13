<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
        	[
        		'template' 	=> 'Home',
        		'title' 	=> 'Home Page',
        		'slug' 		=> 'home',
                'metaTitle' => 'The Cappa Luxury Hotel'
        	]
        ]);
    }
}
