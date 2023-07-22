<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BranchSettingsSeeder extends Seeder
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
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key' 	        => 'navigation_logo',
                'value'         => 'upload/images/settings/logo.png',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'navigation_title',
                'value'         => 'ROOMS & SUITES',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'navigation_sub_title',
                'value'         => 'THE CAPPA LUXURY HOTEL',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'navigation_contact_lablel',
                'value'         => 'Reservation',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'navigation_contact_number',
                'value'         => '855 100 4444',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_first_lable',
                'value'         => 'About Hotel',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_second_lable',
                'value'         => 'Explore',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_third_lable',
                'value'         => 'Contact',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_description',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_address',
                'value'         => '1616 Broadway NY, New York 10001 United States of America',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_phone_number',
                'value'         => '855 100 4444',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_email',
                'value'         => 'info@thegrandbanquet.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_instagram_link',
                'value'         => 'https://www.instagram.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_twitter_link',
                'value'         => 'https://www.twitter.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_youtube_link',
                'value'         => 'https://www.youtube.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_facebook_link',
                'value'         => 'https://www.facebook.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'footer_pinterest_link',
                'value'         => 'https://www.pinterest.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'copyright_text',
                'value'         => '© Copyright 2023 by ',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'copyright_link_title',
                'value'         => 'DuruThemes.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '1',
                'key'           => 'copyright_link',
                'value'         => 'https://www.google.com',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'navigation_logo',
                'value'         => 'upload/images/settings/logo.png',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'navigation_title',
                'value'         => 'ROOMS & SUITES',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'navigation_sub_title',
                'value'         => 'THE CAPPA LUXURY HOTEL',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'navigation_contact_lablel',
                'value'         => 'Reservation',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'navigation_contact_number',
                'value'         => '855 100 4444',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_first_lable',
                'value'         => 'About Hotel',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_second_lable',
                'value'         => 'Explore',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_third_lable',
                'value'         => 'Contact',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_description',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_address',
                'value'         => '1616 Broadway NY, New York 10001 United States of America',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_phone_number',
                'value'         => '855 100 4444',
            ],
            [ 
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_email',
                'value'         => 'info@thegrandbanquet.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_instagram_link',
                'value'         => 'https://www.instagram.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_twitter_link',
                'value'         => 'https://www.twitter.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_youtube_link',
                'value'         => 'https://www.youtube.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_facebook_link',
                'value'         => 'https://www.facebook.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'footer_pinterest_link',
                'value'         => 'https://www.pinterest.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'copyright_text',
                'value'         => '© Copyright 2023 by ',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'copyright_link_title',
                'value'         => 'DuruThemes.com',
            ],
            [
                'settable_type' => 'Branch',
                'settable_id'   => '2',
                'key'           => 'copyright_link',
                'value'         => 'https://www.google.com',
            ],
        ]);
    }
}
