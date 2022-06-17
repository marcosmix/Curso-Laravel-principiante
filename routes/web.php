<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursoLaravel\HomeController;
use App\Http\Controllers\dashboard\DashboardController;


Route::get('/',[HomeController::class,'GetHome'])->name('home');

Route::get('/dasboard',[DashboardController::class,'index'])->name('dashboard');
