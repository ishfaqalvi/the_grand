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
        	['type' => 'Main', 'title'=>'Math Calculators',    'parent_id' => Null, 'url'=>'', 'order'=>'1'],
        	['type' => 'Main', 'title'=>'Calculus',		  	   'parent_id' => Null, 'url'=>'', 'order'=>'2'],
        	['type' => 'Main', 'title'=>'Derivative',		   'parent_id' => Null, 'url'=>'', 'order'=>'3'],
        	['type' => 'Main', 'title'=>'Derivative Rule',	   'parent_id' => Null, 'url'=>'', 'order'=>'4'],
            ['type' => 'Main', 'title'=>'Integral Calculator', 'parent_id' => '1',  'url'=>'', 'order'=>'1'],
            ['type' => 'More', 'title'=>'Integral Calculator', 'parent_id' => Null, 'url'=>'', 'order'=>'1'],
            ['type' => 'More', 'title'=>'Calculus',            'parent_id' => Null, 'url'=>'', 'order'=>'2'],
            ['type' => 'More', 'title'=>'Derivative Rule',     'parent_id' => Null, 'url'=>'', 'order'=>'3'],
            ['type' => 'More', 'title'=>'Derivative Formulas', 'parent_id' => Null, 'url'=>'', 'order'=>'4'],
            ['type' => 'About', 'title'=>'About Us',           'parent_id' => Null, 'url'=>'', 'order'=>'1'],
            ['type' => 'About', 'title'=>'Contact Us',         'parent_id' => Null, 'url'=>'', 'order'=>'2'],
            ['type' => 'About', 'title'=>'Privacy Policy',     'parent_id' => Null, 'url'=>'', 'order'=>'3'],
            ['type' => 'About', 'title'=>'Term of Conditions', 'parent_id' => Null, 'url'=>'', 'order'=>'4'],
            ['type' => 'About', 'title'=>'Careers',            'parent_id' => Null, 'url'=>'', 'order'=>'5'],
        	['type' => 'Contact', 'title'=>'Report a Problem', 'parent_id' => Null, 'url'=>'', 'order'=>'1'],
        	['type' => 'Contact', 'title'=>'Send Feedback',	   'parent_id' => Null, 'url'=>'', 'order'=>'2'],
        	['type' => 'Contact', 'title'=>'Contact Us',	   'parent_id' => Null, 'url'=>'', 'order'=>'3'],
        	['type' => 'Contact', 'title'=>'Write for Us',	   'parent_id' => Null, 'url'=>'', 'order'=>'4'],
            ['type' => '404', 'title'=>'Calculators',	   'parent_id' => Null, 'url'=>'', 'order'=>'1'],
            ['type' => '404', 'title'=>'Resources',	   'parent_id' => Null, 'url'=>'', 'order'=>'2'],
            ['type' => '404', 'title'=>'Calculus',	   'parent_id' => Null, 'url'=>'', 'order'=>'3'],
            ['type' => '404', 'title'=>'Insights',	   'parent_id' => Null, 'url'=>'', 'order'=>'4'],
        ]);
    }
}
