<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
        	[
			  	'title'       => 'Integral Calculator',
			  	'blade'       => 'integral_calculator',
			  	'examples'	  => 'x^(-1/3), x^2/3-x, sin(x)+x/2, cos^3(x), \sqrt(x), ln(x), cot(x), sin(x), cos(x), tan(x), sec(x)',	
			  	'created_at'  => '2023-03-21 08:08:04',
			  	'updated_at'  => '2023-03-21 08:08:04'
			],
			[
			  	'title'       => 'Improper Integral Calculator',
			  	'blade'       => 'improper_integral_calculator',
			  	'examples'	  => 'x^(-1/3), x^2/3-x, sin(x)+x/2, cos^3(x), \sqrt(x), ln(x), cot(x), sin(x), cos(x), tan(x), sec(x)',	
			  	'created_at'  => '2023-03-21 08:09:40',
			  	'updated_at'  => '2023-03-21 08:09:40'
			],
			[
			  	'title'       => 'Integration by Partial Fractions Calculator',
			  	'blade'       => 'integration_by_partial_fractions_calculator',
			  	'examples'	  => 'x/((x+1)(x-4))',	
			  	'created_at'  => '2023-03-21 08:09:48',
			  	'updated_at'  => '2023-03-21 08:09:48'
			],
			[
			  	'title'       => 'Definite Integral Calculator',
			  	'blade'       => 'definite_integral_calculator',
			  	'examples'	  => 'x^(-1/3), x^2/3-x, sin(x)+x/2, cos^3(x), \sqrt(x), ln(x), cot(x), sin(x), cos(x), tan(x), sec(x)',
			  	'created_at'  => '2023-03-21 08:08:36',
			  	'updated_at'  => '2023-03-21 08:08:36'
			],
			[
			  	'title'       => 'Indefinite Integral Calculator',
			  	'blade'       => 'indefinite_integral_calculator',
			  	'examples'	  => 'x^(-1/3), x^2/3-x, sin(x)+x/2, cos^3(x), \sqrt(x), ln(x), cot(x), sin(x), cos(x), tan(x), sec(x)',
			  	'created_at'  => '2023-03-21 08:08:47',
			  	'updated_at'  => '2023-03-21 08:08:47'
			],
			[
			  	'title'       => 'Laplace Transform Calculator',
			  	'blade'       => 'laplace_transform_calculator',
			  	'examples'	  => 'sin(t) t^4',	
			  	'created_at'  => '2023-03-21 08:09:22',
			  	'updated_at'  => '2023-03-21 08:09:22'
			],
			[
			  	'title'       => 'Fourier Transform Calculator',
			  	'blade'       => 'fourier_transform_calculator',
			  	'examples'	  => 'e^{-t^2} sin(t)',	
			  	'created_at'  => '2023-03-21 08:09:32',
			  	'updated_at'  => '2023-03-21 08:09:32'
			],
			[
			  	'title'       => 'U Substitution Calculator',
			  	'blade'       => 'u_substitution_calculator',
			  	'examples'	  => 'cos^3(2x+3), x^2(x^3-2)^3, x/sqrt(x+1)',	
			  	'created_at'  => '2023-03-21 08:09:56',
			  	'updated_at'  => '2023-03-21 08:09:56'
			],
			[
			  	'title'       => 'Trigonometric Substitution Calculator',
			  	'blade'       => 'trigonometric_substitution_calculator',
			  	'examples'	  => '1/sqrt(a^2-x^2), 1/sqrt(a^2+x^2), sqrt(1+4x^2)',	
			  	'created_at'  => '2023-03-21 08:10:08',
			  	'updated_at'  => '2023-03-21 08:10:08'
			],
			[
			  	'title'       => 'Integration by parts calculator',
			  	'blade'       => 'integration_by_parts_calculator',
			  	'examples'	  => 'x lnx, x^2 e^x, x sin2x',	
			  	'created_at'  => '2023-03-21 08:10:18',
			  	'updated_at'  => '2023-03-21 08:10:18'
			],
			[
			  	'title'       => 'Long Division Calculator',
			  	'blade'       => 'long_division_calculator',
			  	'examples'	  => '(x^3+x^2)/ (x^2+x-2), (x^3 - 3x^2 + 4x - 1) / (x-2), (2x^3 - 4x) / (1 - x)',	
			  	'created_at'  => '2023-03-21 08:10:32',
			  	'updated_at'  => '2023-03-21 08:10:32'
			],
			[
			  	'title'       => 'Area Under the curve calculator',
			  	'blade'       => 'area_under_the_curve_calculator',
			  	'examples'	  => 'x,0,2\pi, sin(x),0,2\pi, sin(x),0,2\pi',	
			  	'created_at'  => '2023-03-21 08:10:44',
			  	'updated_at'  => '2023-03-21 08:10:44'
			],
			[
			  	'title'       => 'Riemann Sum Calculator',
			  	'blade'       => 'riemann_sum_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:10:54',
			  	'updated_at'  => '2023-03-21 08:10:54'
			],
			[
			  	'title'       => 'Trapezoidal Rule Calculator',
			  	'blade'       => 'trapezoidal_rule_calculator',
			  	'examples'	  => 'sin(x^2), sin(y^2)',	
			  	'created_at'  => '2023-03-21 08:11:03',
			  	'updated_at'  => '2023-03-21 08:11:03'
			],
			[
			  	'title'       => 'Area between Curves Calculator',
			  	'blade'       => 'area_between_curves_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:11:14',
			  	'updated_at'  => '2023-03-21 08:11:14'
			],
			[
			  	'title'       => 'Simpsons Rule Calculator',
			  	'blade'       => 'simpsons_rule_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:11:24',
			  	'updated_at'  => '2023-03-21 08:11:24'
			],
			[
			  	'title'       => 'Arc Length Calculator',
			  	'blade'       => 'arc_length_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:11:32',
			  	'updated_at'  => '2023-03-21 08:11:32'
			],
			[
			  	'title'       => 'Arc Length of Polar Curve Calculator',
			  	'blade'       => 'arc_length_of_polar_curve_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:11:54',
			  	'updated_at'  => '2023-03-21 08:11:54'
			],
			[
			  	'title'       => 'Limit of Sum Calculator',
			  	'blade'       => 'limit_of_sum_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:12:03',
			  	'updated_at'  => '2023-03-21 08:12:03'
			],
			[
			  	'title'       => 'Mid Point Rule Calculator',
			  	'blade'       => 'mid_point_rule_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:12:03',
			  	'updated_at'  => '2023-03-21 08:12:03'
			],
			[
			  	'title'       => 'Double Integral Calculator',
			  	'blade'       => 'double_integral_calculator',
			  	'examples'	  => '2x + y, 2yx^2+9y^3, 10x^2y^3-6, 3-6xy, 6x-y, sqrt(y^2 + 2)',	
			  	'created_at'  => '2023-03-21 08:08:13',
			  	'updated_at'  => '2023-03-21 08:08:13'
			],
			[
			  	'title'       => 'Triple Integral Calculator',
			  	'blade'       => 'triple_integral_calculator',
			  	'examples'	  => '2x + y, 2yx^2+9y^3, 10x^2y^3-6, 3-6xy, 6x-y',	
			  	'created_at'  => '2023-03-21 08:08:27',
			  	'updated_at'  => '2023-03-21 08:08:27'
			],
			[
			  	'title'       => 'Shell Method Calculator',
			  	'blade'       => 'shell_method_calculator',
			  	'examples'	  => '3x^3 + 2x^2',	
			  	'created_at'  => '2023-03-21 08:08:58',
			  	'updated_at'  => '2023-03-21 08:08:58'
			],
			[
			  	'title'       => 'Washer Method Calculator',
			  	'blade'       => 'washer_method_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:09:06',
			  	'updated_at'  => '2023-03-21 08:09:06'
			],
			[
			  	'title'       => 'Disc Method Calculator',
			  	'blade'       => 'disc_method_calculator',
			  	'examples'	  => '',	
			  	'created_at'  => '2023-03-21 08:09:14',
			  	'updated_at'  => '2023-03-21 08:09:14'
			]
        ]);
    }
}
