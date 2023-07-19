<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
        	[
        		'branch_id'=> '2',
        		'name'     => 'Emily Brown',
        		'image'    => 'upload/images/testimonial/1.jpg',
        		'order'    => '1',
        		'status'   => 'Publish',
        		'message'  => 'Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.',
        	],
        	[
        		'branch_id'=> '2',
        		'name'     => 'Nolan White',
        		'image'    => 'upload/images/testimonial/2.jpg',
        		'order'    => '2',
        		'status'   => 'Publish',
        		'message'  => 'Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.',
        	],
        	[
        		'branch_id'=> '2',
        		'name'     => 'Emily Brown',
        		'image'    => 'upload/images/testimonial/3.jpg',
        		'order'    => '3',
        		'status'   => 'Publish',
        		'message'  => 'Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.',
        	],
        ]);
    }
}
