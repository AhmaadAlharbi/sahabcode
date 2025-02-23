<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactFormController;

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
Route::view('/dashboard-school', 'projects.school-dashboard')->name('project.school_dashboard');

Route::post('/submit-contact', [ContactFormController::class, 'submitForm'])->name('contact.submit');