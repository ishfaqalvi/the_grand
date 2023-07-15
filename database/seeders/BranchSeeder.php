<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
        	[
                'type'      => 'Main Branch',
                'name'      => 'Main',      
                'url'       => 'main',      
                'thumbnail' => 'upload/images/branches/4.jpg'],
            [
                'type'      => 'Sub Branch',
                'name'      => 'Bradfoard', 
                'url'       => 'bradfoard', 
                'thumbnail' => 'upload/images/branches/4.jpg'],
        	[
                'type'      => 'Sub Branch',
                'name'      => 'Dewsbury', 	
                'url'       => 'dewsbury',  
                'thumbnail' => 'upload/images/branches/7.jpg']
        ]);
    }
}
