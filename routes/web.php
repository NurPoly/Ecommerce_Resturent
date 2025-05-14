<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\ZfoodController:: class,'homepage']) ->name ('zfood.home');
Route::get('menu',[App\Http\Controllers\ZfoodController::class,'menupage'])->name ('zfood.menu');
Route::get('about',[App\Http\Controllers\ZfoodController::class,'aboutpage'])->name ('zfood.about');
Route::get('contact',[App\Http\Controllers\ZfoodController::class,'contactpage'])->name ('zfood.contact');
Route::get('chef',[App\Http\Controllers\ZfoodController::class,'chefpage'])->name ('zfood.chef');    
Route::get('blog',[App\Http\Controllers\ZfoodController::class,'blogpage'])->name ('zfood.blog');
Route::get('feature',[App\Http\Controllers\ZfoodController::class,'featurepage'])->name ('zfood.feature');
Route::get('booking',[App\Http\Controllers\ZfoodController::class,'bookingpage'])->name ('zfood.booking');

