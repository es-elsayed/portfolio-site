<?php

use App\Http\Controllers\Admin\MessageController;
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
Route::group(['middleware'=>'auth'], function (){
    Route::view('/', 'pages.admin.dashboard')->name('admin');
    Route::resource('messages', MessageController::class);
});
