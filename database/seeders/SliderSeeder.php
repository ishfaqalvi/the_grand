<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
        	[
                'branch_id' => '1',
        		'type' 		=> 'Image',
        		'title' 	=> 'Luxury Hotel & Best Resort',
        		'sub_title' => 'Enjoy a Luxury Experience',
        		'image' 	=> 'upload/images/sliders/1.jpg',
        		'linktype' 	=> 'Internal',
        		'link' 		=> 'www.google.com',
        		'order' 	=> '1',
        		'status' 	=> 'Publish'
        	],
        	[
                'branch_id' => '1',
        		'type' 		=> 'Image',
        		'title' 	=> 'Unique Place to Relax & Enjoy',
        		'sub_title' => 'The Perfect Base For You',
        		'image' 	=> 'upload/images/sliders/2.jpg',
        		'linktype' 	=> 'Internal',
        		'link' 		=> 'www.google.com',
        		'order' 	=> '2',
        		'status' 	=> 'Publish'
        	],
        	[
                'branch_id' => '2',
        		'type' 		=> 'Image',
        		'title' 	=> 'The Ultimate Luxury Experience',
        		'sub_title' => 'Enjoy The Best Moments of Life',
        		'image' 	=> 'upload/images/sliders/3.jpg',
        		'linktype' 	=> 'Internal',
        		'link' 		=> 'www.google.com',
        		'order' 	=> '3',
        		'status' 	=> 'Publish'
        	],
        	[
                'branch_id' => '2',
        		'type' 		=> 'Image',
        		'title' 	=> 'Unique Place to Relax & Enjoy',
        		'sub_title' => 'The Perfect Base For You',
        		'image' 	=> 'upload/images/sliders/4.jpg',
        		'linktype' 	=> 'Internal',
        		'link' 		=> 'www.google.com',
        		'order' 	=> '4',
        		'status' 	=> 'Publish'
        	]
        ]);
    }
}
