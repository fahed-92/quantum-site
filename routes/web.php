<?php

use App\Http\Controllers\Dashboard\AboutUsController;
use App\Http\Controllers\Dashboard\ClientsController;
use App\Http\Controllers\Dashboard\ContactUsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\RequestServiceController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\SettingsController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
//
// Route::get('/', [HomeController::class, 'index']);
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    // FrontEnd
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Dashboard
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // Authenticate
        Auth::routes();
        // Dashboard
        Route::middleware(['auth'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
           // Route::get('/home', [DashboardController::class, 'index'])->name('index');

            ###########################################[ Settings ]########################################
            Route::resource('settings', SettingsController::class);
            ###########################################[ AboutUs ]########################################
            Route::resource('aboutus', AboutUsController::class);
            ###########################################[ Services ]########################################
            Route::resource('services', ServicesController::class);
            ###########################################[ Faqs ]########################################
            // Route::resource('faqs', FaqController::class);
            ###########################################[ Clients ]########################################
            Route::resource('clients', ClientsController::class);
            ###########################################[ Requests ]########################################
            // Route::resource('requests', RequestServiceController::class);
            ###########################################[ Contact Ys ]########################################
            // Route::get('contactus', [ContactUsController::class, 'index'])->name('contact.index');
            // Route::get('contactus/show', [ContactUsController::class, 'show'])->name('contact.show');
        });

    });
});
Route::group( [
        'prefix' => 'support',
    ], function () {
    Route::get('/cache_clear', function () {
        Artisan::call('cache:clear');
        return 'Cache Cleared successfully!';
    });
    Route::get('/optimize_clear', function () {
        Artisan::call('optimize:clear');
        return 'optimize Cleared successfully!';
    });
    Route::get('/route_cache', function () {
        Artisan::call('route:cache');
        return 'route cached successfully!';
    });
    Route::get('/refresh_db', function () {
        Artisan::call('migrate:fresh');
        return 'refreshed successfully!';
    });

});
