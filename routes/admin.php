<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/
Route::get('dashboard', DashboardController::class)->name('dashboard');

/*
|--------------------------------------------------------------------------
| Settings Routes
|--------------------------------------------------------------------------
*/
Route::controller(SettingController::class)->prefix('settings')->group(function () {
    Route::get('index',     'index' )->name('settings.index');
    Route::post('save',     'save'  )->name('settings.save');
});

/*
|--------------------------------------------------------------------------
| Pages Routes
|--------------------------------------------------------------------------
*/
Route::controller(PageController::class)->prefix('pages')->as('pages.')->group(function () {
    Route::post('index',            'index'    )->name('index'      );
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
Route::controller(ServiceController::class)->prefix('services')->as('services.')->group(function(){
    Route::post('index',            'index'    )->name('index'      );
    Route::get('index',             'index'    )->name('index'      );
    Route::get('create',            'create'   )->name('create'     );
    Route::post('store',            'store'    )->name('store'      );
    Route::get('show/{id}',         'show'     )->name('show'       );
    Route::get('edit/{id}',         'edit'     )->name('edit'       );
    Route::patch('update/{service}','update'   )->name('update'     );
    Route::delete('destroy/{id}',   'destroy'  )->name('destroy'    );
});

/*
|--------------------------------------------------------------------------
| Facilities Routes
|--------------------------------------------------------------------------
*/
Route::controller(FacilityController::class)->prefix('facilities')->as('facilities.')->group(function(){
    Route::post('index',             'index'    )->name('index'      );
    Route::get('index',              'index'    )->name('index'      );
    Route::get('create',             'create'   )->name('create'     );
    Route::post('store',             'store'    )->name('store'      );
    Route::get('show/{id}',          'show'     )->name('show'       );
    Route::get('edit/{id}',          'edit'     )->name('edit'       );
    Route::patch('update/{facility}','update'   )->name('update'     );
    Route::delete('destroy/{id}',    'destroy'  )->name('destroy'    );
});

/*
|--------------------------------------------------------------------------
| News Routes
|--------------------------------------------------------------------------
*/
Route::controller(NewsController::class)->prefix('news')->as('news.')->group(function(){
    Route::post('index',            'index'    )->name('index'      );
    Route::get('index',             'index'    )->name('index'      );
    Route::get('create',            'create'   )->name('create'     );
    Route::post('store',            'store'    )->name('store'      );
    Route::get('show/{id}',         'show'     )->name('show'       );
    Route::get('edit/{id}',         'edit'     )->name('edit'       );
    Route::patch('update/{news}',   'update'   )->name('update'     );
    Route::delete('destroy/{id}',   'destroy'  )->name('destroy'    );
});

/*
|--------------------------------------------------------------------------
| Testimonials Routes
|--------------------------------------------------------------------------
*/
Route::controller(TestimonialController::class)->prefix('testimonials')->as('testimonials.')->group(function(){
    Route::post('index',                'index'    )->name('index'      );
    Route::get('index',                 'index'    )->name('index'      );
    Route::get('create',                'create'   )->name('create'     );
    Route::post('store',                'store'    )->name('store'      );
    Route::get('show/{id}',             'show'     )->name('show'       );
    Route::get('edit/{id}',             'edit'     )->name('edit'       );
    Route::patch('update/{testimonial}','update'   )->name('update'     );
    Route::delete('destroy/{id}',       'destroy'  )->name('destroy'    );
});

/*
|--------------------------------------------------------------------------
| Questions Routes
|--------------------------------------------------------------------------
*/
Route::controller(QuestionController::class)->prefix('questions')->as('questions.')->group(function(){
    Route::post('index',             'index'    )->name('index'      );
    Route::get('index',              'index'    )->name('index'      );
    Route::get('create',             'create'   )->name('create'     );
    Route::post('store',             'store'    )->name('store'      );
    Route::get('show/{id}',          'show'     )->name('show'       );
    Route::get('edit/{id}',          'edit'     )->name('edit'       );
    Route::patch('update/{question}','update'   )->name('update'     );
    Route::delete('destroy/{id}',    'destroy'  )->name('destroy'    );
});

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/
Route::controller(CategoryController::class)->prefix('categories')->as('categories.')->group(function(){
    Route::post('index',                'index'    )->name('index'      );
    Route::get('index',                 'index'    )->name('index'      );
    Route::get('create',                'create'   )->name('create'     );
    Route::post('store',                'store'    )->name('store'      );
    Route::get('show/{id}',             'show'     )->name('show'       );
    Route::get('edit/{id}',             'edit'     )->name('edit'       );
    Route::patch('update/{category}',   'update'   )->name('update'     );
    Route::delete('destroy/{id}',       'destroy'  )->name('destroy'    );
});

/*
|--------------------------------------------------------------------------
| Contacts Routes
|--------------------------------------------------------------------------
*/
Route::controller(ContactController::class)->prefix('contacts')->as('contacts.')->group(function () {
    Route::get('index',          'index'  )->name('index'  );
    Route::post('index',          'index' )->name('index'  );
    Route::get('show/{id}',      'show'   )->name('show'   );
    Route::delete('destroy/{id}','destroy')->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Slider Routes
|--------------------------------------------------------------------------
*/
Route::controller(SliderController::class)->prefix('sliders')->as('sliders.')->group(function(){

    Route::group(['prefix' => 'image', 'as' => 'image.'], function (){
        Route::get('index',     'indexImage' )->name('index' );
        Route::post('index',     'indexImage' )->name('index' );
        Route::get('create',    'createImage')->name('create');
        Route::get('edit/{id}', 'editImage'  )->name('edit'  );
        Route::get('show/{id}', 'showImage'  )->name('show'  );
    });
    
    Route::group(['prefix' => 'video', 'as' => 'video.'], function (){
        Route::get('index',     'indexVideo' )->name('index' );
        Route::post('index',     'indexVideo' )->name('index' );
        Route::get('create',    'createVideo')->name('create');
        Route::get('edit/{id}', 'editVideo'  )->name('edit'  );
        Route::get('show/{id}', 'showVideo'  )->name('show'  );
    });
    
    Route::post('store',            'store'     )->name('store'     );
    Route::patch('update/{slider}',   'update'    )->name('update'    );
    Route::delete('delete/{id}',    'destroy'   )->name('destroy'   );
});

/*
|--------------------------------------------------------------------------
| Menu Routes
|--------------------------------------------------------------------------
*/
Route::controller(MenuController::class)->prefix('menus')->as('menus.')->group(function(){

    Route::group(['prefix' => 'header', 'as' => 'header.'], function (){
        Route::get('index',     'index_header' )->name('index' );
        Route::post('index',     'index_header' )->name('index' );
        Route::get('create',    'create_header')->name('create');
        Route::get('edit/{id}', 'edit_header'  )->name('edit'  );
        Route::get('show/{id}', 'show_header'  )->name('show'  );
    });
    
    Route::group(['prefix' => 'footer', 'as' => 'footer.'], function (){
        Route::get('index',     'index_footer' )->name('index' );
        Route::post('index',     'index_footer' )->name('index' );
        Route::get('create',    'create_footer')->name('create');
        Route::get('edit/{id}', 'edit_footer'  )->name('edit'  );
    });
    
    Route::post('store',            'store'     )->name('store'     );
    Route::patch('update/{menu}',   'update'    )->name('update'    );
    Route::delete('delete/{id}',    'destroy'   )->name('destroy'   );
});

/*
|--------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
*/
Route::controller(GalleryController::class)->prefix('gallery')->as('gallery.')->group(function (){
    
    Route::group(['prefix' => 'image', 'as' => 'image.'], function (){
        Route::get('index',     'index_image' )->name('index' );
        Route::post('index',     'index_image' )->name('index' );
    });
    
    Route::group(['prefix' => 'video', 'as' => 'video.'], function (){
        Route::get('index',     'index_video' )->name('index' );
        Route::post('index',     'index_video' )->name('index' );
    });
    
    Route::post('store',            'store'   )->name('store'     );
    Route::patch('update/{gallery}', 'update' )->name('update'    );
    Route::delete('delete/{id}',    'destroy' )->name('destroy'   );
});

/*
|--------------------------------------------------------------------------
| Domains Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'domains'], function ()
{
    Route::resource('users', UserController::class);
    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('profile',        'profileEdit'  )->name('user.profile.edit');
        Route::post('profile',       'profileUpdate')->name('user.profile.update');
        Route::post('check_email',   'checkEmail'   )->name('user.checkEmail');
        Route::post('check_password','checkPassword')->name('user.checkPassword');
    });

    Route::resource('branches', BranchController::class);
});

/*
|--------------------------------------------------------------------------
| Logging Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'logging'], function ()
{
    Route::controller(AuditController::class)->prefix('audits')->group(function () {
        Route::get('index',          'index')->name('audit.index');
        Route::get('show/{id}',      'show')->name('audit.show');
        Route::delete('destroy/{id}','destroy')->name('audit.destroy');
    });

    Route::get('logs',
        [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']
    )->name('logs');
});

Route::any('{query}', function () {
    return redirect('/');
})->where('query', '.*');