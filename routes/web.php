<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PagesController;
use App\http\Controllers\ReportsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[PagesController::class,'about']);
Route::get('/calculate/{num1}/{num2}',[PagesController::class,'calculate']);
Route::get('/admin',[PagesController::class,'admin']);
Route::get('/services',[PagesController::class,'service']);
route::resource('reports',ReportsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
