<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'branch_id' => '1',
                'key' 	    => 'logo',
                'value'     => 'upload/images/settings/logo.png',
            ],
            [
                'branch_id' => '1',
                'key' 	    => 'copyright',
                'value'     => '© Copyright 2023 by DuruThemes.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'phone',
                'value'     => '855 100 4444',
            ],
            [
                'branch_id' => '1',
                'key'       => 'email',
                'value'     => 'info@thegrandbanquet.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'address',
                'value'     => '1616 Broadway NY, New York 10001 United States of America',
            ],
            [
                'branch_id' => '1',
                'key'       => 'instagram',
                'value'     => 'https://www.instagram.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'twitter',
                'value'     => 'https://www.twitter.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'youtube',
                'value'     => 'https://www.youtube.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'facebook',
                'value'     => 'https://www.facebook.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'pinterest',
                'value'     => 'https://www.pinterest.com',
            ],
            [
                'branch_id' => '1',
                'key'       => 'description',
                'value'     => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
            [
                'branch_id' => '2',
                'key'       => 'logo',
                'value'     => 'upload/images/settings/logo.png',
            ],
            [
                'branch_id' => '2',
                'key'       => 'copyright',
                'value'     => '© Copyright 2023 by DuruThemes.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'phone',
                'value'     => '855 100 4444',
            ],
            [
                'branch_id' => '2',
                'key'       => 'email',
                'value'     => 'info@thegrandbanquet.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'address',
                'value'     => '1616 Broadway NY, New York 10001 United States of America',
            ],
            [
                'branch_id' => '2',
                'key'       => 'instagram',
                'value'     => 'https://www.instagram.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'twitter',
                'value'     => 'https://www.twitter.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'youtube',
                'value'     => 'https://www.youtube.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'facebook',
                'value'     => 'https://www.facebook.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'pinterest',
                'value'     => 'https://www.pinterest.com',
            ],
            [
                'branch_id' => '2',
                'key'       => 'description',
                'value'     => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
            [
                'branch_id' => '3',
                'key'       => 'logo',
                'value'     => 'upload/images/settings/logo.png',
            ],
            [
                'branch_id' => '3',
                'key'       => 'copyright',
                'value'     => '© Copyright 2023 by DuruThemes.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'phone',
                'value'     => '855 100 4444',
            ],
            [
                'branch_id' => '3',
                'key'       => 'email',
                'value'     => 'info@thegrandbanquet.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'address',
                'value'     => '1616 Broadway NY, New York 10001 United States of America',
            ],
            [
                'branch_id' => '3',
                'key'       => 'instagram',
                'value'     => 'https://www.instagram.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'twitter',
                'value'     => 'https://www.twitter.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'youtube',
                'value'     => 'https://www.youtube.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'facebook',
                'value'     => 'https://www.facebook.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'pinterest',
                'value'     => 'https://www.pinterest.com',
            ],
            [
                'branch_id' => '3',
                'key'       => 'description',
                'value'     => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
        ]);
    }
}
