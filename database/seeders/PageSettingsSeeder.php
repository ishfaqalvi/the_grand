<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PageSettingsSeeder extends Seeder
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
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key' 	        => 'home_slider_type',
                'value'         => 'Image',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_slider_autoPlay',
                'value'         => 'Yes',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_slider_speed',
                'value'         => '5',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_first_image',
                'value'         => 'upload/images/pages/settings/8.jpg',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_second_image',
                'value'         => 'upload/images/pages/settings/2.jpg',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_title',
                'value'         => 'Enjoy a Luxury Experience',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_sub_title',
                'value'         => 'The Cappa Luxury Hotel',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_contact_label',
                'value'         => 'Reservation',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_contact_number',
                'value'         => '855 100 4444',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_stars',
                'value'         => '5',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_description',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec id velit ac arcu posuere blane.
                Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_branches_title',
                'value'         => 'Rooms & Suites',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_branches_sub_title',
                'value'         => 'The Cappa Luxury Hotel',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_pageloader',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_scrollprogress',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_navigation',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_slider',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_about',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_branches',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_footer',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_copyright',
                'value'         => 'Show',
            ],





            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_slider_type',
                'value'         => 'Image',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_slider_autoPlay',
                'value'         => 'Yes',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_slider_speed',
                'value'         => '5',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_first_image',
                'value'         => 'upload/images/pages/settings/8.jpg',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_second_image',
                'value'         => 'upload/images/pages/settings/2.jpg',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_title',
                'value'         => 'Enjoy a Luxury Experience',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_sub_title',
                'value'         => 'The Cappa Luxury Hotel',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_contact_label',
                'value'         => 'Reservation',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_contact_number',
                'value'         => '855 100 4444',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_stars',
                'value'         => '5',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_about_description',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec id velit ac arcu posuere blane.
                Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_branches_title',
                'value'         => 'Rooms & Suites',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_branches_sub_title',
                'value'         => 'The Cappa Luxury Hotel',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_pageloader',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_scrollprogress',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_navigation',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_slider',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_about',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_branches',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_footer',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '1',
                'key'           => 'home_sections_copyright',
                'value'         => 'Show',
            ],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_slider_type',
    'value'         => 'Image',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_slider_autoPlay',
    'value'         => 'Yes',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_slider_speed',
    'value'         => '5',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_first_image',
    'value'         => 'upload/images/pages/settings/8.jpg',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_second_image',
    'value'         => 'upload/images/pages/settings/2.jpg',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_title',
    'value'         => 'Enjoy a Luxury Experience',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_sub_title',
    'value'         => 'The Cappa Luxury Hotel',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_contact_label',
    'value'         => 'Reservation',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_contact_number',
    'value'         => '855 100 4444',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_stars',
    'value'         => '5',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_about_description',
    'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec id velit ac arcu posuere blane.
    Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.',
],
[ 
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_branches_title',
    'value'         => 'Rooms & Suites',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_branches_sub_title',
    'value'         => 'The Cappa Luxury Hotel',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_pageloader',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_scrollprogress',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_navigation',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_slider',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_about',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_branches',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_footer',
    'value'         => 'Show',
],
[
    'settable_type' => 'Page',
    'settable_id'   => '2',
    'key'           => 'home_sections_copyright',
    'value'         => 'Show',
],
        ]);
    }
}
