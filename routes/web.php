<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\añadirLibroController;
use App\Http\Controllers\añadirUsuarioController;
use App\Http\Controllers\prestamoLibroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('');
});




//ruta para añadir libros
Route::post('/añadirLibro',[añadirLibroController::class,'store'])->name('añadirLibro');

//ruta para mostrar libros
Route::get('/añadirLibro',[añadirLibroController::class,'index'])->name('libros.index');

//
Route::get('/añadir',[añadirLibroController::class,'create'])->name('libros.create');

//ruta mostrar elemento individual
//Route::get('/añadirLibro/{id}',[añadirLibroController::class,'show'])->name('libros.show');


//
Route::delete('/añadirLibro/{id}',[añadirLibroController::class,'destroy'])->name('libros.delete');

//
Route::get('/añadirLibro/{id}/edit',[añadirLibroController::class,'edit'])->name('libros.edit');

//
Route::put('/añadirLibro/{id}',[añadirLibroController::class,'update'])->name('libros.update');


//añadir usuarios

Route::post('/añadirUsuario',[añadirUsuarioController::class,'store'])->name('añadirUsuario');

//ruta para mostrar libros
Route::get('/añadirUsuario',[añadirUsuarioController::class,'index'])->name('usuarios.index');

Route::delete('/añadirUsuario/{id}',[añadirUsuarioController::class,'destroy'])->name('usuarios.delete');

//
Route::get('/añadirUsuario/{id}/edit',[añadirUsuarioController::class,'edit'])->name('usuarios.edit');

//
Route::put('/añadirUsuario/{id}',[añadirUsuarioController::class,'update'])->name('usuarios.update');

//añadirPrestamos

Route::post('/añadirPrestamo',[prestamoLibroController::class,'store'])->name('añadirPrestamo');

//ruta para mostrar libros
Route::get('/añadirPrestamo',[prestamoLibroController::class,'index'])->name('prestamos.index');

Route::delete('/añadirPrestamo/{id}',[prestamoLibroController::class,'destroy'])->name('prestamos.delete');

//
Route::get('/añadirPrestamo/{id}/edit',[prestamoLibroController::class,'edit'])->name('prestamos.edit');

//
Route::put('/añadirPrestamo/{id}',[prestamoLibroController::class,'update'])->name('prestamos.update');
