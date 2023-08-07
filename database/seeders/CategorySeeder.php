<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
                'branch_id'         => '2',
                'image'             => 'upload/images/category/4.jpg',
                'title'             => 'Ballroom',
                'image_link'        => 'image-gallery',
                'image_link_title'  => 'Image',
                'video_link'        => 'video-gallery',
                'video_link_title'  => 'Video',
                'label'             => 'Main Branch',
                'order'             => '1',
                'status'            => 'Publish',
            ],
            [
                'branch_id'         => '2',
                'image'             => 'upload/images/category/7.jpg',
                'title'             => 'Mehndi',
                'image_link'        => 'image-gallery',
                'image_link_title'  => 'Image',
                'video_link'        => 'video-gallery',
                'video_link_title'  => 'Video',
                'label'             => 'Second Branch',
                'order'             => '2',
                'status'            => 'Publish',
            ],
            [
                'branch_id'         => '2',
                'image'             => 'upload/images/category/7.jpg',
                'title'             => 'Baraat',
                'image_link'        => 'image-gallery',
                'image_link_title'  => 'Image',
                'video_link'        => 'video-gallery',
                'video_link_title'  => 'Video',
                'label'             => 'Thired Branch',
                'order'             => '3',
                'status'            => 'Publish',  
            ],
            [
                'branch_id'         => '2',
                'image'             => 'upload/images/category/4.jpg',
                'title'             => 'Waleema',
                'image_link'        => 'image-gallery',
                'image_link_title'  => 'Image',
                'video_link'        => 'video-gallery',
                'video_link_title'  => 'Video',
                'label'             => 'Forth Branch',
                'order'             => '4',
                'status'            => 'Publish',
            ],
        ]);
    }
}
