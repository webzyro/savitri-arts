<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/our-products', function () {
    return view('products');
})->name('products');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/our-services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/our-services/{slug}', [ServiceController::class, 'show'])->name('service.show');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');

Route::get('/our-gallery', [GalleryController::class, 'index'])->name('gallery');

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');

