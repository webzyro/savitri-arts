<?php

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

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

