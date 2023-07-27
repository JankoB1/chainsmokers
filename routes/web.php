<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('show-homepage');
Route::get('/how-to-win', [MainController::class, 'showHowToWin'])->name('show-how-to-win');
Route::get('/rules', [MainController::class, 'showRules'])->name('show-rules');
Route::get('faq', [MainController::class, 'showFaq'])->name('show-faq');

Auth::routes();

