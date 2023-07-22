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
                'label'     => 'Main Branch',      
                'url'       => '/',      
                'url_title' => 'Details',      
                'thumbnail' => 'upload/images/branches/4.jpg'],
            [
                'type'      => 'Sub Branch',
                'name'      => 'Bradfoard', 
                'label'     => 'First Branch', 
                'url'       => 'http://bradfoard.websitecms.test/', 
                'url_title' => 'Details', 
                'thumbnail' => 'upload/images/branches/4.jpg'],
        	[
                'type'      => 'Sub Branch',
                'name'      => 'Dewsbury', 	
                'label'     => 'Second Branch',  
                'url'       => 'http://dewsbury.websitecms.test/',  
                'url_title' => 'Details',  
                'thumbnail' => 'upload/images/branches/7.jpg']
        ]);
    }
}
