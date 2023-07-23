<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/contact-us', ContactUsController::class)->name('contact-us');
Route::get('/about-us', AboutUsController::class)->name('about-us');
Route::resource('news', NewsController::class)->only(['index', 'show'])->scoped([
    'news' => 'slug',
]);

Route::middleware('guest')->group(function () {
    Route::name('auth.')->group(function () {
        Route::get('/app/login', [LoginController::class, 'view'])->name('auth.view');
        Route::post('/app/login', [LoginController::class, 'post'])->name('auth.login');
    });
});

Route::middleware('auth')->group(function () {
    Route::resource('news', NewsController::class)->except(['index', 'show'])->scoped([
        'news' => 'slug',
    ]);

    Route::post('/app/logout', LogoutController::class)->name('auth.logout');
});
