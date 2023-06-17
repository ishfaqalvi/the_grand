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
                'key'         => 'function_input_title',
                'value'       => 'Enter function',
            ],
            [
                'key'         => 'select_function_title',
                'value'       => 'Load Example',
            ],
            [
                'key'         => 'integral_calculator_variable',
                'value'       => 'With Respect to',
            ],
            [
                'key'         => 'integral_type',
                'value'       => 'Select Integral Type',
            ],
            [
                'key'         => 'main_function',
                'value'       => 'Function 1:',
            ],
            [
                'key'         => 'second_function',
                'value'       => 'Function 2:',
            ],
            [
                'key'         => 'upper_function',
                'value'       => 'Upper Function',
            ],
            [
                'key'         => 'lower_function',
                'value'       => 'Lower Function',
            ],
            [
                'key'         => 'from_value',
                'value'       => 'From',
            ],
            [
                'key'         => 'to_value',
                'value'       => 'To',
            ],
            [
                'key'         => 'x_upper_limit',
                'value'       => 'X Upper Limit',
            ],
            [
                'key'         => 'x_lower_limit',
                'value'       => 'X Lower Limit',
            ],
            [
                'key'         => 'y_upper_limit',
                'value'       => 'Y Upper Limit',
            ],
            [
                'key'         => 'y_lower_limit',
                'value'       => 'Y Lower Limit',
            ],
            [
                'key'         => 'z_upper_limit',
                'value'       => 'Z Upper Limit',
            ],
            [
                'key'         => 'z_lower_limit',
                'value'       => 'Z Lower Limit',
            ],
            [
                'key'         => 'k_value',
                'value'       => 'n->inf k',
            ],
            [
                'key'         => 'value_of_x1',
                'value'       => 'Enter value of X1',
            ],
            [
                'key'         => 'value_of_x2',
                'value'       => 'Enter value of X2',
            ],
            [
                'key'         => 'value_of_y1',
                'value'       => 'Enter value of Y1',
            ],
            [
                'key'         => 'value_of_y2',
                'value'       => 'Enter value of Y2',
            ],
            [
                'key'         => 'riemann_sum_input',
                'value'       => 'Riemann sum of',
            ],
            [
                'key'         => 'compute_input',
                'value'       => 'Compute',
            ],
            [
                'key'         => 'compute_with',
                'value'       => 'With',
            ],
            [
                'key'         => 'upper_limit',
                'value'       => 'Upper Limit',
            ],
            [
                'key'         => 'lower_limit',
                'value'       => 'Lower Limit',
            ],
            [
                'key'         => 'simpson_input',
                'value'       => 'Simpson Rule',
            ],
            [
                'key'         => 'from_variable',
                'value'       => 'From X=',
            ],
            [
                'key'         => 'to_variable',
                'value'       => 'TO X=',
            ],
            [
                'key'         => 'interval_width',
                'value'       => 'with interval width equal to',
            ],
            [
                'key'         => 'trapezoids_number',
                'value'       => 'Number of Trapezoids',
            ],
            [
                'key'         => 'function_with_x',
                'value'       => 'f(x):',
            ],
            [
                'key'         => 'function_with_g',
                'value'       => 'g(x):',
            ],
            [
                'key'         => 'calculate_btn_heading',
                'value'       => 'CALCULATE',
            ],
            [
                'key'         => 'resources_btn_heading',
                'value'       => 'RESOURCES',
            ],
            [
                'key'         => 'widget_heading',
                'value'       => 'Get the Widget!',
            ],
            [
                'key'         => 'widget_description',
                'value'       => 'Introduction to Integral CalculatorAdd this calculator to your site and lets users to perform easy calculations.',
            ],
            [
                'key'         => 'feedback_heading',
                'value'       => 'Feedback',
            ],
            [
                'key'         => 'feedback_description',
                'value'       => 'How easy was it to use our calculator? Did you face any problem, tell us!',
            ],
            [
                'key'         => 'App_link_heading',
                'value'       => 'Available on App',
            ],
            [
                'key'         => 'App_link_description',
                'value'       => 'Download Weight loss Calculator App for Your Mobile.',
            ],
            [
                'key'         => 'footer_description',
                'value'       => 'Integral Calculator makes you calculate integral volume and line integration. You can calculate vertical integration with online integration calculator.',
            ],
            [
                'key'         => 'footer_heading_1',
                'value'       => 'More',
            ],    
            [
                'key'         => 'footer_heading_2',
                'value'       => 'About',
            ],
            [
                'key'         => 'footer_heading_3',
                'value'       => 'Contact',
            ],
            [
                'key'         => 'connect_heading',
                'value'       => 'Connect With Us',
            ],
            [
                'key'         => 'footer_button',
                'value'       => 'Bazzigate',
            ],
            [
                'key'         => 'copyright_heading',
                'value'       => 'Copyright © 2022 2023',
            ],
            [
                'key'         => 'definite_type',
                'value'       => 'Definite Type',
            ],
            [
                'key'         => 'indefinite_type',
                'value'       => 'Indefinite Type',
            ],
            [
                'key'         => 'right',
                'value'       => 'Right',
            ],
            [
                'key'         => 'left',
                'value'       => 'Left',
            ],
            [
                'key'         => 'midpoint',
                'value'       => 'Midpoint',
            ],
            [
                'key'         => 'home',
                'value'       => 'Home',
            ],
            [
                'key'         => 'required_email',
                'value'       => 'Your email adress will not be published. Required fields are marked *',
            ],
            [
                'key'         => 'table_of_contents',
                'value'       => 'Table of Contents',
            ],
            [
                'key'         => 'submit_feedback',
                'value'       => 'Submit Feedback',
            ],
            [
                'key'         => 'play_store',
                'value'       => 'Google Play',
            ],
            [
                'key'         => 'app_store',
                'value'       => 'App Store',
            ],
            [
                'key'         => 'get_code',
                'value'       => 'Get Code',
            ],
            [
                'key'         => 'related_problems',
                'value'       => 'Related Problems',
            ],
            [
                'key'         => 'related_blogs',
                'value'       => 'Related Blogs',
            ],
            [
                'key'         => 'submit_comment',
                'value'       => 'Submit Comment',
            ],
            [
                'key'         => 'integral_problems',
                'value'       => 'Integral Problems',
            ],
            [
                'key'         => 'blogs',
                'value'       => 'Blogs',
            ],
            [
                'key'         => 'comment_heading',
                'value'       => 'Leave a Comment',
            ],
            [
                'key'         => '404',
                'value'       => '404',
            ],
            [
                'key'         => 'not_found_heading',
                'value'       => 'Oops! Page not Found',
            ],
            [
                'key'         => 'sorry_heading',
                'value'       => 'Sorry, the page you are looking for doesnt exist',
            ],
        ]);
    }
}
