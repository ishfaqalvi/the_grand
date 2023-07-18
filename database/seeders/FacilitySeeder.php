<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
        	[
        		'page_id' 		=> '2',
        		'icon' 			=> 'flaticon-world',
        		'title' 		=> 'Pick Up & Drop',
        		'order' 		=> '1',
        		'status' 		=> 'Publish',
        		'description' 	=> 'We’ll pick up from airport while you comfy on your ride, mus nellentesque habitant.',
        	],
        	[
        		'page_id' 		=> '2',
        		'icon' 			=> 'flaticon-car',
        		'title' 		=> 'Parking Space',
        		'order' 		=> '2',
        		'status' 		=> 'Publish',
        		'description' 	=> 'Fusce tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.',
        	],
        	[
        		'page_id' 		=> '2',
        		'icon' 			=> 'flaticon-bed',
        		'title' 		=> 'Room Service',
        		'order' 		=> '3',
        		'status' 		=> 'Publish',
        		'description' 	=> 'Room tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.',
        	],[
        		'page_id' 		=> '2',
        		'icon' 			=> 'flaticon-swimming',
        		'title' 		=> 'Swimming Pool',
        		'order' 		=> '4',
        		'status' 		=> 'Publish',
        		'description' 	=> 'Swimming pool tincidunt nise ace park norttito sit space, mus nellentesque habitant.',
        	],[
        		'page_id' 		=> '2',
        		'icon' 			=> 'flaticon-wifi',
        		'title' 		=> 'Fibre Internet',
        		'order' 		=> '5',
        		'status' 		=> 'Publish',
        		'description' 	=> 'Wifi tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.',
        	],[
        		'page_id' 		=> '2',
        		'icon' 			=> 'flaticon-breakfast',
        		'title' 		=> 'Breakfast',
        		'order' 		=> '6',
        		'status' 		=> 'Publish',
        		'description' 	=> 'Eat tincidunt nisa ace park norttito sit amet space, mus nellentesque habitant',
        	],
        ]);
    }
}
