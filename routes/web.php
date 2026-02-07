<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/our-services', function () {
    return view('service');
})->name('service');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/our-gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/our-products', function () {
    return view('products');
})->name('products');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

