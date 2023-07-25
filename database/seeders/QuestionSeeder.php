<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'How can I confirm that you have received my reservation?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	],
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'Up to what age are they considered children?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	],
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'Do you have any discount code?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	],
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'How can I get in touch with my hotel?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	],
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'On the last day, can I leave the room later?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	],
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'Can I cancel my reservation?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	],
        	[
        		'branch_id'  => '2',
        		'title' 	 => 'Do you have hotels with a spa?',
        		'description'=> 'Lorem ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine. Donec in quis the pellentesque velit id velit ac arcu posuere blane.',
        		'order' 	 => '1',
        		'status' 	 => 'Publish'
        	]
        ]);
    }
}
