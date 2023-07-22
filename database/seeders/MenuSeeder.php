<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'branch_id' => '1', 
                'type'      => 'Footer', 
                'title'     => 'Home',    
                'parent_id' => Null, 
                'url'       => '', 
                'order'     => '1'
            ],
            [
                'branch_id' => '1', 
                'type'      => 'Footer', 
                'title'     => 'Bradford',              
                'parent_id' => Null, 
                'url'       => '', 
                'order'     =>'2'
            ],
            [
                'branch_id' => '1', 
                'type'      => 'Footer', 
                'title'     => 'Dewsbury',        
                'parent_id' => Null, 
                'url'       => '', 
                'order'     => '3'
            ],
        	[
                'branch_id' => '2', 
                'type'      => 'Header', 
                'title'     => 'Home',    
                'parent_id' => Null, 
                'url'       => '', 
                'order'     => '1'
            ],
        	[
                'branch_id' => '2', 
                'type'      => 'Header', 
                'title'     => 'Gallery',		  	   
                'parent_id' => Null, 
                'url'       => '', 
                'order'     =>'2'
            ],
        	[
                'branch_id' => '2', 
                'type'      => 'Header', 
                'title'     => 'Image',		   
                'parent_id' => '5', 
                'url'       => '', 
                'order'     => '1'
            ],
        	[
                'branch_id' => '2', 
                'type'      => 'Header', 
                'title'     => 'Video',	   
                'parent_id' => '5', 
                'url'       => '', 
                'order'     => '2'],
            [
                'branch_id' => '2', 
                'type'      => 'Header', 
                'title'     => 'FAQS', 
                'parent_id' => Null,  
                'url'       => '', 
                'order'     => '3'
            ],
            [
                'branch_id' => '2', 
                'type'      => 'Header', 
                'title'     => 'Contact', 
                'parent_id' => Null, 
                'url'       =>'', 
                'order'     =>'4'
            ],
            [
                'branch_id' => '2', 
                'type'      => 'Footer', 
                'title'     => 'Home',    
                'parent_id' => Null, 
                'url'       => '', 
                'order'     => '1'
            ],
            [
                'branch_id' => '2', 
                'type'      => 'Footer', 
                'title'     => 'Image Gallery',        
                'parent_id' => Null, 
                'url'       => '', 
                'order'     => '2'
            ],
            [
                'branch_id' => '2', 
                'type'      => 'Footer', 
                'title'     => 'Video Gallery',    
                'parent_id' => Null, 
                'url'       => '', 
                'order'     => '3'
            ],
            [
                'branch_id' => '2', 
                'type'      => 'Footer', 
                'title'     => 'FAQS', 
                'parent_id' => Null,  
                'url'       => '', 
                'order'     => '4'
            ],
            [
                'branch_id' => '2', 
                'type'      => 'Footer', 
                'title'     => 'Contact', 
                'parent_id' => Null, 
                'url'       =>'', 
                'order'     =>'5'
            ],
        ]);
    }
}
