<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Route::get('/', function () {
        return view('pages.index');
    })->name('home');
    Route::get(LaravelLocalization::transRoute('routes.about'), function () {
        return view('pages.about');
    })->name('about');
    Route::get(LaravelLocalization::transRoute('routes.gallery'), function () {
        return view('pages.gallery');
    })->name('gallery');
    Route::get(LaravelLocalization::transRoute('routes.contact'), function () {
        return view('pages.contact');
    })->name('contact');

});