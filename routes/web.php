<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InfoController;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/my-info-view', [InfoController::class, 'index'])->name('addInfoView');
Route::post('/store-my-info', [InfoController::class, 'store'])->name('storeInfo');
