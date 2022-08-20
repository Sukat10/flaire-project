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

Route::redirect('/designs', '/templates');

Route::middleware([Authenticate::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // admin only
    Route::middleware(['admin'])->group(function () {
        Route::resource('templates', TemplateController::class)->only([
            'create', 'store', 'edit',
        ]);
        Route::post('templates/{template}', [TemplateController::class, 'update'])->name('template.update');
        Route::post('templates/{template}', [TemplateController::class, 'destroy'])->name('template.destroy');
        Route::resource('categories', CategoryController::class)->only([
            'create', 'store', 'edit'
        ]);
        Route::post('categories/{category}', [TemplateController::class, 'update'])->name('category.update');
        Route::post('categories/{category}', [TemplateController::class, 'destroy'])->name('category.destroy');
    });
    // end of admin only

    Route::resource('templates', TemplateController::class)->only([
        'index', 'show'
    ]);
    Route::resource('categories', CategoryController::class)->only([
        'index', 'show'
    ]);
});
