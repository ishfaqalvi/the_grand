<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DynamicStringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dynamic_strings')->insert([
            [
                'language_id' => '1',
                'key'         => 'function_input_title',
                'value'       => 'Enter function',
            ],
            [
                'language_id' => '1',
                'key'         => 'select_function_title',
                'value'       => 'Load Example',
            ],
            [
                'language_id' => '1',
                'key'         => 'integral_calculator_variable',
                'value'       => 'With Respect to',
            ],
            [
                'language_id' => '1',
                'key'         => 'integral_type',
                'value'       => 'Select Integral Type',
            ],
            [
                'language_id' => '1',
                'key'         => 'main_function',
                'value'       => 'Function 1:',
            ],
            [
                'language_id' => '1',
                'key'         => 'second_function',
                'value'       => 'Function 2:',
            ],
            [
                'language_id' => '1',
                'key'         => 'upper_function',
                'value'       => 'Upper Function',
            ],
            [
                'language_id' => '1',
                'key'         => 'lower_function',
                'value'       => 'Lower Function',
            ],
            [
                'language_id' => '1',
                'key'         => 'from_value',
                'value'       => 'From',
            ],
            [
                'language_id' => '1',
                'key'         => 'to_value',
                'value'       => 'To',
            ],
            [
                'language_id' => '1',
                'key'         => 'x_upper_limit',
                'value'       => 'X Upper Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'x_lower_limit',
                'value'       => 'X Lower Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'y_upper_limit',
                'value'       => 'Y Upper Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'y_lower_limit',
                'value'       => 'Y Lower Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'z_upper_limit',
                'value'       => 'Z Upper Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'z_lower_limit',
                'value'       => 'Z Lower Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'k_value',
                'value'       => 'n->inf k',
            ],
            [
                'language_id' => '1',
                'key'         => 'value_of_x1',
                'value'       => 'Enter value of X1',
            ],
            [
                'language_id' => '1',
                'key'         => 'value_of_x2',
                'value'       => 'Enter value of X2',
            ],
            [
                'language_id' => '1',
                'key'         => 'value_of_y1',
                'value'       => 'Enter value of Y1',
            ],
            [
                'language_id' => '1',
                'key'         => 'value_of_y2',
                'value'       => 'Enter value of Y2',
            ],
            [
                'language_id' => '1',
                'key'         => 'riemann_sum_input',
                'value'       => 'Riemann sum of',
            ],
            [
                'language_id' => '1',
                'key'         => 'compute_input',
                'value'       => 'Compute',
            ],
            [
                'language_id' => '1',
                'key'         => 'compute_with',
                'value'       => 'With',
            ],
            [
                'language_id' => '1',
                'key'         => 'upper_limit',
                'value'       => 'Upper Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'lower_limit',
                'value'       => 'Lower Limit',
            ],
            [
                'language_id' => '1',
                'key'         => 'simpson_input',
                'value'       => 'Simpson Rule',
            ],
            [
                'language_id' => '1',
                'key'         => 'from_variable',
                'value'       => 'From X=',
            ],
            [
                'language_id' => '1',
                'key'         => 'to_variable',
                'value'       => 'TO X=',
            ],
            [
                'language_id' => '1',
                'key'         => 'interval_width',
                'value'       => 'with interval width equal to',
            ],
            [
                'language_id' => '1',
                'key'         => 'trapezoids_number',
                'value'       => 'Number of Trapezoids',
            ],
            [
                'language_id' => '1',
                'key'         => 'function_with_x',
                'value'       => 'f(x):',
            ],
            [
                'language_id' => '1',
                'key'         => 'function_with_g',
                'value'       => 'g(x):',
            ],
            [
                'language_id' => '1',
                'key'         => 'calculate_btn_heading',
                'value'       => 'CALCULATE',
            ],
            [
                'language_id' => '1',
                'key'         => 'resources_btn_heading',
                'value'       => 'RESOURCES',
            ],
            [
                'language_id' => '1',
                'key'         => 'widget_heading',
                'value'       => 'Get the Widget!',
            ],
            [
                'language_id' => '1',
                'key'         => 'widget_description',
                'value'       => 'Introduction to Integral CalculatorAdd this calculator to your site and lets users to perform easy calculations.',
            ],
            [
                'language_id' => '1',
                'key'         => 'feedback_heading',
                'value'       => 'Feedback',
            ],
            [
                'language_id' => '1',
                'key'         => 'feedback_description',
                'value'       => 'How easy was it to use our calculator? Did you face any problem, tell us!',
            ],
            [
                'language_id' => '1',
                'key'         => 'App_link_heading',
                'value'       => 'Available on App',
            ],
            [
                'language_id' => '1',
                'key'         => 'App_link_description',
                'value'       => 'Download Weight loss Calculator App for Your Mobile.',
            ],
            [
                'language_id' => '1',
                'key'         => 'footer_description',
                'value'       => 'Integral Calculator makes you calculate integral volume and line integration. You can calculate vertical integration with online integration calculator.',
            ],
            [
                'language_id' => '1',
                'key'         => 'footer_heading_1',
                'value'       => 'More',
            ],    
            [
                'language_id' => '1',
                'key'         => 'footer_heading_2',
                'value'       => 'About',
            ],
            [
                'language_id' => '1',
                'key'         => 'footer_heading_3',
                'value'       => 'Contact',
            ],
            [
                'language_id' => '1',
                'key'         => 'connect_heading',
                'value'       => 'Connect With Us',
            ],
            [
                'language_id' => '1',
                'key'         => 'footer_button',
                'value'       => 'Bazzigate',
            ],
            [
                'language_id' => '1',
                'key'         => 'copyright_heading',
                'value'       => 'Copyright © 2022 2023',
            ],
            [
                'language_id' => '1',
                'key'         => 'definite_type',
                'value'       => 'Definite Type',
            ],
            [
                'language_id' => '1',
                'key'         => 'indefinite_type',
                'value'       => 'Indefinite Type',
            ],
            [
                'language_id' => '1',
                'key'         => 'right',
                'value'       => 'Right',
            ],
            [
                'language_id' => '1',
                'key'         => 'left',
                'value'       => 'Left',
            ],
            [
                'language_id' => '1',
                'key'         => 'midpoint',
                'value'       => 'Midpoint',
            ],
            [
                'language_id' => '1',
                'key'         => 'home',
                'value'       => 'Home',
            ],
            [
                'language_id' => '1',
                'key'         => 'required_email',
                'value'       => 'Your email adress will not be published. Required fields are marked *',
            ],
            [
                'language_id' => '1',
                'key'         => 'table_of_contents',
                'value'       => 'Table of Contents',
            ],
            [
                'language_id' => '1',
                'key'         => 'submit_feedback',
                'value'       => 'Submit Feedback',
            ],
            [
                'language_id' => '1',
                'key'         => 'play_store',
                'value'       => 'Google Play',
            ],
            [
                'language_id' => '1',
                'key'         => 'app_store',
                'value'       => 'App Store',
            ],
            [
                'language_id' => '1',
                'key'         => 'get_code',
                'value'       => 'Get Code',
            ],
            [
                'language_id' => '1',
                'key'         => 'related_problems',
                'value'       => 'Related Problems',
            ],
            [
                'language_id' => '1',
                'key'         => 'related_blogs',
                'value'       => 'Related Blogs',
            ],
            [
                'language_id' => '1',
                'key'         => 'submit_comment',
                'value'       => 'Submit Comment',
            ],
            [
                'language_id' => '1',
                'key'         => 'integral_problems',
                'value'       => 'Integral Problems',
            ],
            [
                'language_id' => '1',
                'key'         => 'blogs',
                'value'       => 'Blogs',
            ],
            [
                'language_id' => '1',
                'key'         => 'comment_heading',
                'value'       => 'Leave a Comment',
            ],
            [
                'language_id' => '1',
                'key'         => '404',
                'value'       => '404',
            ],
            [
                'language_id' => '1',
                'key'         => 'not_found_heading',
                'value'       => 'Oops! Page not Found',
            ],
            [
                'language_id' => '1',
                'key'         => 'sorry_heading',
                'value'       => 'Sorry, the page you are looking for doesnt exist',
            ],
        ]);
    }
}
