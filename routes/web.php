<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/instructions', function () {
    return view('comingsoon');
})->name('instructions');

Route::get('/designs', function () {
    return view('comingsoon');
})->name('designs');

Route::get('/social-calender', function () {
    return view('comingsoon');
})->name('social-calender');

Route::get('/affiliate-program', function () {
    return view('comingsoon');
})->name('affiliate-program');

Route::get('/contact-us', function () {
    return view('comingsoon');
})->name('contact-us');

Route::get('/copyright', function () {
    return view('comingsoon');
})->name('copyright');

Route::get('/search', [SearchController::class, 'index'])->name('search');

Auth::routes();

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('template', TemplateController::class);
    Route::resource('category', CategoryController::class);
});
