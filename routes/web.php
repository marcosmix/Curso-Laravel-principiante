<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursoLaravel\HomeController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\EjemploController;


Route::get('/',[HomeController::class,'GetHome'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/ejemplo',[EjemploController::class,'index']);