<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name("quote.index");
Route::get('/idezetek/house', [QuoteController::class, "house"])->name("quote.house");
Route::get('/idezetek/modern-family', [QuoteController::class, "modernFamily"])->name("quote.modernFamily");
Route::get('/idezetek/csoki', [QuoteController::class, "uvegtigrisCsoki"])->name("quote.uvegtigrisCsoki");
Route::get('/idezetek/lali', [QuoteController::class, "uvegtigrisLali"])->name("quote.uvegtigrisLali");
Route::get('/idezetek/harry-potter/{slug}', [QuoteController::class, "harryPotter"])->name("quote.harryPotter");