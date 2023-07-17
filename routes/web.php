<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return inertia('HomePage');
})->name('home');

Route::get('/contact-us', function () {
    return inertia('ContactUsPage');
})->name('contact-us');

Route::get('/about-us', function () {
    return inertia('AboutUsPage');
})->name('about-us');

Route::resource('news', NewsController::class)->only(['index', 'show']);

Route::middleware('guest')->group(function () {
    //
});

Route::middleware('auth')->group(function () {
    Route::resource('news', NewsController::class)->except(['index', 'show']);
});
