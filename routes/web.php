<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layouts.app');
})-> name('home');

Route::resource('products', ProductController::class);


Route::post('/contact',[App\http\Controllers\ContactController::class, 'submitForm'])->name('site.contact');
Route::get('/contact', [App\http\Controllers\ContactController::class, 'show'])->name('components.contactform');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');



Route::fallback(function () {
    return view('404');
});
