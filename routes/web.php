<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\languageController;
use App\Http\Controllers\PageLinkController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/lang/{locale}', [languageController::class, 'switchLang'])->name('switchLang');
Route::get('/products/{slug}',[PageLinkController::class,'showProduct'])->name('showProduct');
Route::get('/categories/{slug}',[PageLinkController::class,'showCategory'])->name('category.show');














Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // logined user can access this routes





});


require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
