<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name("quote.index");
Route::get('/idezetek/house', [QuoteController::class, "house"])->name("quote.house");
Route::get('/idezetek/modern-family', [QuoteController::class, "modernFamily"])->name("quote.modernFamily");
Route::get('/idezetek/csoki', [QuoteController::class, "uvegtigrisCsoki"])->name("quote.uvegtigrisCsoki");
Route::get('/idezetek/lali', [QuoteController::class, "uvegtigrisLali"])->name("quote.uvegtigrisLali");
Route::get('/idezetek/harry-potter/{slug}', [QuoteController::class, "harryPotter"])->name("quote.harryPotter");
Route::get('/naptar/ma', [CalendarController::class, "today"])->name("calendar.today");
Route::get('/naptar/tegnap', [CalendarController::class, "yesterday"])->name("calendar.yesterday");
Route::get('/naptar/holnap', [CalendarController::class, "tomorrow"])->name("calendar.tomorrow");
Route::get('/szamologep/{a}{operator}{b}', [CalculatorController::class, "result"])
->whereNumber('a', 'b')->where('operator', '^[+\-*\/]{1}$')->name("calculator.result");
Route::get('/hetnapja/{number}', [CalendarController::class, "weekdayName"])
->whereNumber('number')->name("weekday.name");
Route::get('/hetnapja/{name}', [CalendarController::class, "weekdayNumber"])
->where('name', '^[\w]+$')->name("weekday.number");