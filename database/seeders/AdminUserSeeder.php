<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      => 'Super Admin',
                'email'     => 'superadmin@gmail.com',
                'password'  => bcrypt('password'),
                'type'      => 'Main',
                'branch_id' => 1
            ],
            [
                'name'      => 'Bradfoard Admin',
                'email'     => 'bradfoardadmin@gmail.com',
                'password'  => bcrypt('password'),
                'type'      => 'Branch',
                'branch_id' => 2
            ],
            [
                'name'      => 'Dewsbury Admin',
                'email'     => 'dewsburyadmin@gmail.com',
                'password'  => bcrypt('password'),
                'type'      => 'Branch',
                'branch_id' => 3
            ]
        ]);
    }
}
