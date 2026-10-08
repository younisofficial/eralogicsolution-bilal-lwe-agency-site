<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/pricing', PricingController::class)->name('pricing');

// Max 5 enquiries per minute from one visitor.
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');

Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [SeoController::class, 'robots'])->name('robots');
