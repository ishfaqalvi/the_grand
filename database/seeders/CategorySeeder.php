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
                'branch_id'   => '2',
                'image'       => 'upload/images/category/4.jpg',
                'title'       => 'Ballroom',
                'link'        => 'http://bradfoard.ourdevworks.com/',
                'label'       => 'Main Branch',
                'link_title'  => 'Details',
                'order'       => '1',
                'status'      => 'Publish',
            ],
            [
                'branch_id'   => '2',
                'image'       => 'upload/images/category/7.jpg',
                'title'       => 'Mehndi',
                'link'        => 'http://bradfoard.ourdevworks.com/',
                'label'       => 'Second Branch',
                'link_title'  => 'Details',
                'order'       => '2',
                'status'      => 'Publish',
            ],
            [
                'branch_id'   => '2',
                'image'       => 'upload/images/category/7.jpg',
                'title'       => 'Baraat',
                'link'        => 'http://bradfoard.ourdevworks.com/',
                'label'       => 'Thired Branch',
                'link_title'  => 'Details',
                'order'       => '3',
                'status'      => 'Publish',  
            ],
            [
                'branch_id'   => '2',
                'image'       => 'upload/images/category/4.jpg',
                'title'       => 'Waleema',
                'link'        => 'http://bradfoard.ourdevworks.com/',
                'label'       => 'Forth Branch',
                'link_title'  => 'Details',
                'order'       => '4',
                'status'      => 'Publish',
            ],
        ]);
    }
}
