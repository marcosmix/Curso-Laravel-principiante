<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NuevoControlador;
use App\Http\Controllers\cursoLaravel\HomeController;
use App\Models\Etiqueta;

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\EtiquetasController;
use App\Http\Controllers\GastosController;

use App\Http\Controllers\UsuarioController;

Route::view('/login', 'Auth.login')->name('login');

Route::get('/', [HomeController::class, 'GetHome'])->name('Home');
Route::group(['middleware'=>['auth']],function(){
    
    Route::resource('categorias', CategoriasController::class);
    Route::resource('etiquetas', EtiquetasController::class);
    Route::resource('gastos', GastosController::class);
    Route::resource('perfiles', UsuarioController::class);
    Route::get('testUsuario', [UsuarioController::class, 'test']);

});