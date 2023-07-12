<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// Route::domain('{subdomain}.' . env('APP_DOMAIN', 'websitecms.test'))->group(function () {
//     Route::get('admin/home', DashboardController::class)->name('subdomain.dashboard');
//     Route::get('home', function () {
//         return Redirect::to('http://websitecms.test/admin/home');
//     })->name('dashboard');
// });

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/
Route::get('dashboard', DashboardController::class)->name('dashboard');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::resource('users', UserController::class);
Route::controller(UserController::class)->prefix('user')->group(function () {
	Route::get('profile', 		 'profileEdit'	)->name('user.profile.edit');
    Route::post('profile',		 'profileUpdate')->name('user.profile.update');
    Route::post('check_email', 	 'checkEmail'	)->name('user.checkEmail');
    Route::post('check_password','checkPassword')->name('user.checkPassword');
});

/*
|--------------------------------------------------------------------------
| Slider Routes
|--------------------------------------------------------------------------
*/
Route::resource('sliders', SliderController::class);

/*
|--------------------------------------------------------------------------
| Branches Routes
|--------------------------------------------------------------------------
*/
Route::resource('branches', BranchController::class);

/*
|--------------------------------------------------------------------------
| News Routes
|--------------------------------------------------------------------------
*/
Route::resource('news', NewsController::class);

/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/
Route::resource('services', ServiceController::class);

/*
|--------------------------------------------------------------------------
| Facilities Routes
|--------------------------------------------------------------------------
*/
Route::resource('facilities', FacilityController::class);

/*
|--------------------------------------------------------------------------
| Testimonials Routes
|--------------------------------------------------------------------------
*/
Route::resource('testimonials', TestimonialController::class);

/*
|--------------------------------------------------------------------------
| Questions Routes
|--------------------------------------------------------------------------
*/
Route::resource('questions', QuestionController::class);


/*
|--------------------------------------------------------------------------
| Media Routes
|--------------------------------------------------------------------------
| All route related to media module
*/
Route::controller(GalleryController::class)->prefix('media')->group(function () {
	Route::get('index',		  	'index'	 )->name('media.index');
	Route::post('store',		'store'	 )->name('media.store');
	Route::delete('delete/{id}','destroy')->name('media.destroy');
});

/*
|--------------------------------------------------------------------------
| Menu Routes
|--------------------------------------------------------------------------
| All route related to menu module
*/
Route::resource('menus', MenuController::class);


/*
|--------------------------------------------------------------------------
| Job Application Routes
|--------------------------------------------------------------------------
| All route related to application module
*/

/*
|--------------------------------------------------------------------------
| String Routes
|--------------------------------------------------------------------------
| All route related to strings managment module
*/
Route::resource('dynamic-strings', DynamicStringController::class);
Route::controller(DynamicStringController::class)->prefix('string')->group(function () {
	Route::post('check_key',	'checkKey')->name('string.check_key');
	Route::get('language/{id}',	'addLanguage')->name('string.add');
});


/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
| All route related to page managment module
*/
Route::controller(PageController::class)->prefix('pages')->group(function(){
	/*
	|--------------------------------------------------------------------------
	| Home Pages Routes
	|--------------------------------------------------------------------------
	*/
	Route::group(['prefix' => 'home'], function (){
    	Route::get('index',		'index_home' )->name('pages.home.index' );
    	Route::get('create',	'create_home')->name('pages.home.create');
    	Route::get('edit/{id}',	'edit_home'  )->name('pages.home.edit'  );
    	Route::get('show/{id}',	'show_home'  )->name('pages.home.show'  );
    });


    /*
	|--------------------------------------------------------------------------
	| Blog Pages Routes
	|--------------------------------------------------------------------------
	*/
    Route::group(['prefix' => 'image-gallery'], function (){
    	Route::get('index',		'index_image_gallery' )->name('pages.imagegallery.index' );
    	Route::get('create',	'create_image_gallery')->name('pages.imagegallery.create');
    	Route::get('edit/{id}',	'edit_image_gallery'  )->name('pages.imagegallery.edit'  );
    	Route::get('show/{id}',	'show_image_gallery'  )->name('pages.imagegallery.show'  );
    });

    /*
	|--------------------------------------------------------------------------
	| Problem Pages Routes
	|--------------------------------------------------------------------------
	*/
    Route::group(['prefix' => 'video-gallery'], function (){
    	Route::get('index',		'index_video_gallery' )->name('pages.videogallery.index' );
    	Route::get('create',	'create_video_gallery')->name('pages.videogallery.create');
    	Route::get('edit/{id}',	'edit_video_gallery'  )->name('pages.videogallery.edit'  );
    	Route::get('show/{id}',	'show_video_gallery'  )->name('pages.videogallery.show'  );
    });

    /*
	|--------------------------------------------------------------------------
	| Category Pages Routes
	|--------------------------------------------------------------------------
	*/
    Route::group(['prefix' => 'category'], function (){
    	Route::get('index',		'index_category' )->name('pages.category.index' );
    	Route::get('create',	'create_category')->name('pages.category.create');
    	Route::get('edit/{id}',	'edit_category'  )->name('pages.category.edit'  );
    });


    /*
	|--------------------------------------------------------------------------
	| Contact Us Pages Routes
	|--------------------------------------------------------------------------
	*/
    Route::group(['prefix' => 'contact-us'], function (){
    	Route::get('index',		'index_contact_us' )->name('pages.contactus.index' );
    	Route::get('create',	'create_contact_us')->name('pages.contactus.create');
    	Route::get('edit/{id}',	'edit_contact_us'  )->name('pages.contactus.edit'  );
    	Route::get('show/{id}',	'show_contact_us'  )->name('pages.contactus.show'  );
    });

    /*
	|--------------------------------------------------------------------------
	| Simple Pages Routes
	|--------------------------------------------------------------------------
	*/
    Route::group(['prefix' => 'faq'], function (){
    	Route::get('index',		'index_faq' )->name('pages.faq.index' );
    	Route::get('create',	'create_faq')->name('pages.faq.create');
    	Route::get('edit/{id}',	'edit_faq'  )->name('pages.faq.edit'  );
    	Route::get('show/{id}',	'show_faq'  )->name('pages.faq.show'  );
    });

    /*
	|--------------------------------------------------------------------------
	| General Page Routes
	|--------------------------------------------------------------------------
	*/
    Route::post('store', 			'store'		)->name('pages.store'		);
    Route::patch('update/{page}', 	'update'	)->name('pages.update'		);
    Route::delete('delete/{id}', 	'destroy'	)->name('pages.destroy'		);
    Route::post('check_slug',	 	'checkSlug'	)->name('pages.check_slug'	);
    Route::patch('publish/{page}',	'publish'	)->name('pages.publish'		);
    Route::patch('unpublish/{page}','unpublish'	)->name('pages.unpublish'	);
});

/*
|--------------------------------------------------------------------------
| Feedback Routes
|--------------------------------------------------------------------------
| All route related to feedback managment module
*/
Route::resource('feedbacks', FeedbackController::class);

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
| All route related to comments managment module
*/
Route::resource('comments', CommentController::class);

/*
|--------------------------------------------------------------------------
| Audit Routes
|--------------------------------------------------------------------------
| All route related to audit managment module
*/
Route::controller(AuditController::class)->prefix('audits')->group(function () {
	Route::get('index', 		 'index')->name('audit.index');
	Route::get('show/{id}', 	 'show')->name('audit.show');
	Route::delete('destroy/{id}','destroy')->name('audit.destroy');
});


/*
|--------------------------------------------------------------------------
| Settings Routes
|--------------------------------------------------------------------------
| All route related to overall settings of website
*/
Route::controller(SettingController::class)->prefix('settings')->group(function () {
	Route::get('index', 	'index'	)->name('settings.index');
	Route::post('save', 	'save'	)->name('settings.save');
});

/*
|--------------------------------------------------------------------------
| Error Log Route
|--------------------------------------------------------------------------
*/
Route::get('logs',
	[\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']
)->name('logs');



