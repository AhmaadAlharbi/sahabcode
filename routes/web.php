<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// Route::get('/', function () {
//     return view('welcome');
// });
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
});