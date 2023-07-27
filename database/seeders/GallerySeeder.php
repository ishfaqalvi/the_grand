<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('galleries')->insert([
        	[
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
        		'image'          => '1690425666.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
        	],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690427710.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690427747.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690427824.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690427882.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690427959.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690430756.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Image',
                'image'          => '1690430797.jpg',
                'video_thumbnail'=> '',
                'video_link'     => ''
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Video',
                'image'          => '',
                'video_thumbnail'=> '1690431686.jpg',
                'video_link'     => 'https://youtu.be/xh4GnTKFQso'
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Video',
                'image'          => '',
                'video_thumbnail'=> '1690431779.jpg',
                'video_link'     => 'https://youtu.be/xh4GnTKFQso'
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Video',
                'image'          => '',
                'video_thumbnail'=> '1690431795.jpg',
                'video_link'     => 'https://youtu.be/xh4GnTKFQso'
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Video',
                'image'          => '',
                'video_thumbnail'=> '1690431818.jpg',
                'video_link'     => 'https://youtu.be/xh4GnTKFQso'
            ],
            [
                'branch_id'      => '2',
                'category_id'    => '1',
                'type'           => 'Video',
                'image'          => '',
                'video_thumbnail'=> '1690431839.jpg',
                'video_link'     => 'https://youtu.be/xh4GnTKFQso'
            ],
        ]);
    }
}
