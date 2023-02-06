<?php

use App\Http\Controllers\Admin\Portfolio\MessageController;
use App\Http\Controllers\Admin\Portfolio\SettingsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes();
Route::redirect('/', '/admin/dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'pages.admin.dashboard')->name('dashboard');

    Route::group(['prefix' => 'portfolio', 'as' => 'portfolio.'], function () {
        Route::resource('messages', MessageController::class);
        Route::resource('settings', SettingsController::class);
    });

});

// Route::group(array('domain' => '{subdomain}.project.dev'), function() {

//     Route::get('foo', function($subdomain) {
//         // Here I can access $subdomain
//     });

//     $subdomain = Route::input('subdomain');

// });
