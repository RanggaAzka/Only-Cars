<?php

use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;


Route::resource('home', HomeController::class);
Route::resource('mobil', MobilController::class);
Route::resource('about', AboutController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('/event', EventController::class);
Route::resource('contact', ContactController::class);