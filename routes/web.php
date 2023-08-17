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
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function() {
    Route::prefix('/admin')->namespace('\App\Http\Controllers\Admin')->group(__DIR__.'/admin.php');
});

/*
|--------------------------------------------------------------------------
| Dynamic Page Routes
|--------------------------------------------------------------------------
*/
Route::controller(DynamicPageController::class)->group(function(){
	Route::post('contact_us/store', 'contactUsStore')->name('contactUs.store');
});

/*
|--------------------------------------------------------------------------
| Dynamic Pages Routes
|--------------------------------------------------------------------------
*/
Route::domain('{subdomain}.' . env('APP_DOMAIN', 'websitecms.test'))->group(function () {
    Route::get('/', 	 [DynamicPageController::class, 'viewSubdomainHomePage' ])->name('subdomain');
    Route::get('/{slug}',[DynamicPageController::class, 'viewSubdomainOtherPage'])->name('subdomainPage');
});

/*
|--------------------------------------------------------------------------
| Dynamic Pages Routes
|--------------------------------------------------------------------------
*/
Route::domain(env('APP_DOMAIN', 'websitecms.test'))->group(function () {
    Route::get('/', [DynamicPageController::class, 'viewHomePage'])->name('home');
});


Route::any('{query}', function () {
    return redirect('/');
})->where('query', '.*');