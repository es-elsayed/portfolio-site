<?php

use App\Http\Controllers\Site\MessageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/portfolio', function () {
    return view('pages.site.portfolio');
})->name('portfolio');
Route::redirect('/','/portfolio');
// Route::redirect('/admin', route('admin.dashboard'));


Route::post('message', MessageController::class)->name('addMessage');
