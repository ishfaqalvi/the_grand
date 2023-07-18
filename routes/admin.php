<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\BranchSettingController;

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
| Branches Routes
|--------------------------------------------------------------------------
*/
Route::resource('branches', BranchController::class);

/*
|--------------------------------------------------------------------------
| Slider Routes
|--------------------------------------------------------------------------
*/
Route::resource('sliders', SliderController::class);

/*
|--------------------------------------------------------------------------
| Menu Routes
|--------------------------------------------------------------------------
*/
Route::resource('menus', MenuController::class);

/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
*/
Route::controller(PageController::class)->prefix('pages')->as('pages.')->group(function () {
    Route::get('index',             'index'    )->name('index'      );
    Route::get('create',            'create'   )->name('create'     );
    Route::post('store',            'store'    )->name('store'      );
    Route::get('show/{id}',         'show'     )->name('show'       );
    Route::get('edit/{id}',         'edit'     )->name('edit'       );
    Route::patch('update/{page}',   'update'   )->name('update'     );
    Route::delete('destroy/{id}',   'destroy'  )->name('destroy'    );
    Route::post('checkSlug',        'checkSlug')->name('check_slug' );
});

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
| News Routes
|--------------------------------------------------------------------------
*/
Route::resource('news', NewsController::class);



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



