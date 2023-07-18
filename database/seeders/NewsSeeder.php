<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
        	[
        		'page_id' 	  => '2',
        		'heading' 	  => 'Historic restaurant renovated',
        		'sub_heading' => 'Restaurant',
        		'image' 	  => 'upload/images/news/1.jpg',
        		'date' 		  => '2023-07-14',
        		'url' 		  => 'www.google.com',
        		'order' 	  => '1',
        		'status' 	  => 'Publish',
        		'description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.'
        	],
        	[
        		'page_id' 	  => '2',
        		'heading' 	  => 'Benefits of Spa Treatments',
        		'sub_heading' => 'Spa',
        		'image' 	  => 'upload/images/news/2.jpg',
        		'date' 		  => '2023-07-14',
        		'url' 		  => 'www.google.com',
        		'order' 	  => '2',
        		'status' 	  => 'Publish',
        		'description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.'
        	],
        	[
        		'page_id' 	  => '2',
        		'heading' 	  => 'Historic restaurant renovated',
        		'sub_heading' => 'Restaurant',
        		'image' 	  => 'upload/images/news/3.jpg',
        		'date' 		  => '2023-07-14',
        		'url' 		  => 'www.google.com',
        		'order' 	  => '3',
        		'status' 	  => 'Publish',
        		'description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.'
        	],
        	[
        		'page_id' 	  => '2',
        		'heading' 	  => 'Benefits of Spa Treatments',
        		'sub_heading' => 'Spa',
        		'image' 	  => 'upload/images/news/4.jpg',
        		'date' 		  => '2023-07-14',
        		'url' 		  => 'www.google.com',
        		'order' 	  => '4',
        		'status' 	  => 'Publish',
        		'description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.'
        	],
        	[
        		'page_id' 	  => '2',
        		'heading' 	  => 'Historic restaurant renovated',
        		'sub_heading' => 'Restaurant',
        		'image' 	  => 'upload/images/news/5.jpg',
        		'date' 		  => '2023-07-14',
        		'url' 		  => 'www.google.com',
        		'order' 	  => '5',
        		'status' 	  => 'Publish',
        		'description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.'
        	],
        	[
        		'page_id' 	  => '2',
        		'heading' 	  => 'Benefits of Spa Treatments',
        		'sub_heading' => 'Spa',
        		'image' 	  => 'upload/images/news/6.jpg',
        		'date' 		  => '2023-07-14',
        		'url' 		  => 'www.google.com',
        		'order' 	  => '6',
        		'status' 	  => 'Publish',
        		'description' => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.'
        	],
        ]);
    }
}
