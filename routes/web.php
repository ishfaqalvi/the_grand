<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\DynamicPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
| All route related to user
*/
Auth::routes();
/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
| All route related to admin include in this file
*/



Route::group(['middleware' => ['auth']], function() {
    Route::prefix('/admin')->namespace('\App\Http\Controllers\Admin')->group(__DIR__.'/admin.php');
});

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
| All route related to public pages
*/
/*
|--------------------------------------------------------------------------
| Dynamic Page Routes
|--------------------------------------------------------------------------
*/
Route::controller(DynamicPageController::class)->group(function(){
	Route::post('job_application/store','jobApplicationStore')->name('application.store');
	Route::post('feedback/store', 		'feedbackStore'		 )->name('feedback.store');
	Route::post('comment/store', 		'commentStore'		 )->name('comment.store');
});

/*
|--------------------------------------------------------------------------
| Dynamic Pages Routes
|--------------------------------------------------------------------------
*/
Route::domain('{subdomain}.' . env('APP_DOMAIN', 'websitecms.test'))->group(function () {
    Route::get('/', 		[DynamicPageController::class, 'viewSubdomainHomePage' ])->name('subdomain');
    Route::get('/{slug}', 	[DynamicPageController::class, 'viewSubdomainOtherPage'])->name('subdomainPage');
});

Route::domain(env('APP_DOMAIN', 'websitecms.test'))->group(function () {
    Route::get('/', [DynamicPageController::class, 'viewHomePage'])->name('home');
    // Route::get('/{slug}', 		'viewPage'	  )->name('viewPage');
});
