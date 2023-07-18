<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        	[
                'page_id'     => '2',
                'image'       => 'upload/images/services/1.jpg',
                'heading'     => 'The Restaurant',
                'sub_heading' => 'DISCOVER',
                'link'        => 'www.google.com',
                'order'       => '1',
                'status'      => 'Publish',
                'description' => 'Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.',
            ],
            [
                'page_id'     => '2',
                'image'       => 'upload/images/services/2.jpg',
                'heading'     => 'Spa Center',
                'sub_heading' => 'EXPERIENCES',
                'link'        => 'www.google.com',
                'order'       => '2',
                'status'      => 'Publish',
                'description' => 'Spa center inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.',
            ],
            [
                'page_id'     => '2',
                'image'       => 'upload/images/services/3.jpg',
                'heading'     => 'Fitness Center',
                'sub_heading' => 'MODERN',
                'link'        => 'www.google.com',
                'order'       => '3',
                'status'      => 'Publish',
                'description' => 'Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.',
            ],
            [
                'page_id'     => '2',
                'image'       => 'upload/images/services/4.jpg',
                'heading'     => 'The Health Club & Pool',
                'sub_heading' => 'EXPERIENCES',
                'link'        => 'www.google.com',
                'order'       => '4',
                'status'      => 'Publish',
                'description' => 'The health club & pool at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.',
            ],
        ]);
    }
}
