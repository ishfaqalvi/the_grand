<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
        	[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> '1',
				'template' 		=> 'Home',
				'category_type' => NULL,
				'title' 		=> 'Integral Calculator',
				'slug' 			=> 'integral-calculator',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '
									Enter the function, variable, upper, and lower bound limit. Select definite or indefinite integral option. Hit the Calculate button to find the antiderivative using antiderivative calculator.',
				'content' 		=> '
									<div>
										Derivative calculator is an online tool which provides a complete solution of differentiation. The differentiation calculator helps someone to calculate derivatives on run time with few clicks.
									</div>
									<div>Differentiate calculator provides useful results in the form of steps which helps users and specifically the students to learn this concept in detail.
									</div>
									<div>For calculating derivatives in term of x and y, use implicit differentiation calculator with steps.
									</div>
									<div>Formulas used by <a href="#">Derivative Calculator</a></div>
									<div>The derivatives of inverse functions calculator uses the below mentioned formula to find derivatives of a function. The derivative formula is:
									</div>
									<div>$$ \\frac{dy}{dx} = \\lim\\limits_{&Delta;x \\to 0} \\frac{f(x+&Delta;x) - f(x)}{&Delta;x} $$</div>
									<div>
										Apart from the standard derivative formula, there are many other formulas through which you can find derivatives of a function. These calculations formulas are:
									</div>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> '1',
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 15:38:11',
				'updated_at' 	=> '2023-04-04 15:38:11'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> NULL,
				'template' 		=> 'Category',
				'category_type' => 'Tool'
				,'title' 		=> 'Math Calculators',
				'slug' 			=> 'math-calculators',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '',
				'content' 		=> '<p><strong>
									Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> NULL,
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 15:42:58',
				'updated_at' 	=> '2023-04-04 15:42:58'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> NULL,
				'template' 		=> 'Category',
				'category_type' => 'Blog',
				'title' 		=> 'Blogs',
				'slug' 			=> 'blogs',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '',
				'content' 		=> '<p><strong>
									Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> NULL,
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 15:43:37',
				'updated_at' 	=> '2023-04-04 15:43:37'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> NULL,
				'template' 		=> 'Category',
				'category_type' => 'Problem'
				,'title' 		=> 'Integral Problems',
				'slug' 			=> 'integral-problems',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '',
				'content' 		=> '<p><strong>
									Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> NULL,
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 15:44:42',
				'updated_at' 	=> '2023-04-04 15:44:42'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> NULL,
				'template' 		=> 'Career',
				'category_type' => NULL,
				'title' 		=> 'career',
				'slug' 			=> 'career',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '',
				'content' 		=> '<p><strong>
									Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> NULL,
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 16:24:28',
				'updated_at' 	=> '2023-04-04 16:24:28'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> NULL,
				'template' 		=> 'Simple',
				'category_type' => NULL,
				'title' 		=> 'Integral Derivative',
				'slug' 			=> 'integral-derivative',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '',
				'content' 		=> NULL,
				'status' 		=> 'UnPublish',
				'auther_id' 	=> NULL,
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 16:40:48',
				'updated_at' 	=> '2023-04-04 16:40:48'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> NULL,
				'tool_id' 		=> NULL,
				'template' 		=> 'Contact_us',
				'category_type' => NULL,
				'title' 		=> 'Contact Us',
				'slug' 			=> 'contact-us',
				'image' 		=> NULL,
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '',
				'content' 		=> '<p><strong>
									Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> NULL,
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 17:02:01',
				'updated_at' 	=> '2023-04-04 17:02:01'
			],
			[
				'language_id' 	=> '1',
				'parent_id' 	=> '2',
				'tool_id' 		=> '2',
				'template' 		=> 'Tool',
				'category_type' => NULL,
				'title' 		=> 'Improper Integral Calculator',
				'slug' 			=> 'improper-integral-calculator',
				'image' 		=> 'upload/images/pages/derivative.svg.webp',
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> '
									Enter the function, variable, upper, and lower bound limit. Select definite or indefinite integral option. Hit the Calculate button to find the antiderivative using antiderivative calculator.',
				'content' 		=> '<p><strong>
									Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> '1',
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-04 17:10:30',
				'updated_at' 	=> '2023-04-04 17:10:30'
            ],
            [
				'language_id' 	=> '1',
				'parent_id' 	=> '3',
				'tool_id' 		=> NULL,
				'template' 		=> 'Blog',
				'category_type' => NULL,
				'title' 		=> 'Evaluate the Indefinite Integral as an Infinite Series. Cos x − 1x dx',
				'slug' 			=> 'evaluate-the-indefinite-integral-as-an-infinite-series.-cos-x-−-1x-dx',
				'image' 		=> 'upload/images/pages/1680859513.webp',
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> 'To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.',
				'content' 		=> '<p>To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> '1',
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-05 15:57:35',
				'updated_at' 	=> '2023-04-05 15:57:35'
			],
            [
				'language_id' 	=> '1',
				'parent_id' 	=> '4',
				'tool_id' 		=> NULL,
				'template' 		=> 'Problem',
				'category_type' => NULL,
				'title' 		=> 'Integral of Sinx',
				'slug' 			=> 'integral-of-sinx',
				'image' 		=> 'upload/images/pages/1680693652.webp',
				'canonical' 	=> NULL,
				'metaTitle' 	=> NULL,
				'metaDescription'=> NULL,
				'og_tags' 		=> NULL,
				'schemas' 		=> NULL,
				'description'	=> 'To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.',
				'content' 		=> '<p>To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.To evaluate the indefinite integral of cos(x) - 1/x as an infinite series, we can use the technique of power series expansion.</p>',
				'status' 		=> 'UnPublish',
				'auther_id' 	=> '1',
				'published_by' 	=> NULL,
				'created_by' 	=> '1',
				'published_at' 	=> NULL,
				'created_at' 	=> '2023-04-05 15:58:45',
				'updated_at' 	=> '2023-04-05 15:58:45'
			],
        ]);
    }
}
