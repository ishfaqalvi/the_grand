<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\BranchSettingController;

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
Route::controller(MenuController::class)->prefix('menus')->as('menus.')->group(function(){
    /*
    |--------------------------------------------------------------------------
    | Navigation Menu Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'header', 'as' => 'header.'], function (){
        Route::get('index',     'index_header' )->name('index' );
        Route::get('create',    'create_header')->name('create');
        Route::get('edit/{id}', 'edit_header'  )->name('edit'  );
        Route::get('show/{id}', 'show_header'  )->name('show'  );
    });
    /*
    |--------------------------------------------------------------------------
    | Footer Menu Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'footer', 'as' => 'footer.'], function (){
        Route::get('index',     'index_footer' )->name('index' );
        Route::get('create',    'create_footer')->name('create');
        Route::get('edit/{id}', 'edit_footer'  )->name('edit'  );
    });
    /*
    |--------------------------------------------------------------------------
    | General Menu Routes
    |--------------------------------------------------------------------------
    */
    Route::post('store',            'store'     )->name('store'     );
    Route::patch('update/{menu}',   'update'    )->name('update'    );
    Route::delete('delete/{id}',    'destroy'   )->name('destroy'   );
});

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
    Route::post('settings',         'settings' )->name('settings'   );
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
| Category Routes
|--------------------------------------------------------------------------
*/
Route::resource('categories', CategoryController::class);

/*
|--------------------------------------------------------------------------
| Media Routes
|--------------------------------------------------------------------------
*/
Route::controller(GalleryController::class)->prefix('gallery')->as('gallery.')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Image Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'image', 'as' => 'image.'], function (){
        Route::get('index',     'index_image' )->name('index' );
    });
    /*
    |--------------------------------------------------------------------------
    | Video Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'video', 'as' => 'video.'], function (){
        Route::get('index',     'index_video' )->name('index' );
    });
    /*
    |--------------------------------------------------------------------------
    | General Menu Routes
    |--------------------------------------------------------------------------
    */
    Route::post('store',            'store'   )->name('store'     );
    Route::patch('update/{gallery}', 'update' )->name('update'    );
    Route::delete('delete/{id}',    'destroy' )->name('destroy'   );
});

/*
|--------------------------------------------------------------------------
| Contacts Routes
|--------------------------------------------------------------------------
*/
Route::controller(ContactController::class)->prefix('contacts')->as('contacts.')->group(function () {
    Route::get('index',          'index'  )->name('index'  );
    Route::get('show/{id}',      'show'   )->name('show'   );
    Route::delete('destroy/{id}','destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Audit Routes
|--------------------------------------------------------------------------
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



