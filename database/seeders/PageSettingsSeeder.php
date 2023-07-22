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
                'key'           => 'home_category_title',
                'value'         => 'Rooms & Suites',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_category_sub_title',
                'value'         => 'The Cappa Luxury Hotel',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_service_title',
                'value'         => 'Hotel Services',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_service_sub_title',
                'value'         => 'OUR SERVICES',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_bg_image',
                'value'         => 'upload/images/pages/settings/4.jpg',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_title',
                'value'         => 'What Clients Say?',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_sub_title',
                'value'         => 'TESTIMONIALS',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_card_title',
                'value'         => 'Hotel Booking Form',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_card_sub_title',
                'value'         => 'ROOMS & SUITES',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_card_btn_title',
                'value'         => 'Check Availability',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_card_btn_url',
                'value'         => 'www.google.com',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_booking_card_desc',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_facilities_title',
                'value'         => 'Hotel Facilities',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_facilities_sub_title',
                'value'         => 'Our Services',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_news_title',
                'value'         => 'Our News',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_news_sub_title',
                'value'         => 'Hotel Blog',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_testimonial_bg_image',
                'value'         => 'upload/images/pages/settings/4.jpg',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_testimonial_title',
                'value'         => 'What Clients Say?',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_testimonial_sub_title',
                'value'         => 'Testimonials',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_title',
                'value'         => 'Contact Us',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_sub_title',
                'value'         => 'Best Prices',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_btn_title',
                'value'         => 'Contact Us',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_btn_url',
                'value'         => 'www.google.com',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_desc',
                'value'         => 'The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum sceisue the aucan.
                            Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque habitant morbine.',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card1_image',
                'value'         => 'upload/images/pages/settings/1.jpg',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card1_title',
                'value'         => 'Call Us',
            ],
            [ 
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card1_phone_title',
                'value'         => 'For information',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card1_phone',
                'value'         => '855 100 4444',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card1_desc',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card2_image',
                'value'         => 'upload/images/pages/settings/3.jpg',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card2_title',
                'value'         => 'Reservation',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card2_btn_title',
                'value'         => 'Check Availability',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card2_btn_url',
                'value'         => 'Testimonials',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_contact_us_card2_desc',
                'value'         => 'Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.',
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
                'key'           => 'home_sections_category',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_sections_service',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_sections_booking',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_sections_facilities',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_sections_news',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_sections_testimonial',
                'value'         => 'Show',
            ],
            [
                'settable_type' => 'Page',
                'settable_id'   => '2',
                'key'           => 'home_sections_contact_us',
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
