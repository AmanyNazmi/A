<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::POST('/contact_data', [SiteController::class, 'contact_data'])->name('contact_data');
