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
                'branch_id' => '1',
        		'template' 	=> 'Home',
        		'title' 	=> 'Home Page',
        		'slug' 		=> 'home',
                'metaTitle' => 'The Cappa Luxury Hotel'
        	],
            [
                'branch_id' => '2',
                'template'  => 'Home',
                'title'     => 'Home Page',
                'slug'      => 'home',
                'metaTitle' => 'The Cappa Luxury Hotel'
            ],
            [
                'branch_id' => '2',
                'template'  => 'FAQS',
                'title'     => 'FAQS',
                'slug'      => 'faqs',
                'metaTitle' => 'The Cappa Luxury Hotel'
            ],
            [
                'branch_id' => '2',
                'template'  => 'Contact Us',
                'title'     => 'Contact Us',
                'slug'      => 'contact-us',
                'metaTitle' => 'The Cappa Luxury Hotel'
            ],
            [
                'branch_id' => '2',
                'template'  => 'Image Gallery',
                'title'     => 'Image Gallery',
                'slug'      => 'image-gallery',
                'metaTitle' => 'The Cappa Luxury Hotel'
            ],
            [
                'branch_id' => '2',
                'template'  => 'Video Gallery',
                'title'     => 'Video Gallery',
                'slug'      => 'video-gallery',
                'metaTitle' => 'The Cappa Luxury Hotel'
            ],
            [
                'branch_id' => '3',
                'template'  => 'Home',
                'title'     => 'Home Page',
                'slug'      => 'home',
                'metaTitle' => 'The Cappa Luxury Hotel'
            ]
        ]);
    }
}
