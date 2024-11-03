<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\TestimonioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarritoController;

// Ruta principal para la página de inicio (manejada por PagesController)
Route::get('/', [PagesController::class, 'home'])->name('home');

// Rutas para las secciones específicas de productos
Route::get('/productos-populares', [ProductoController::class, 'populares'])->name('productos.populares');
Route::get('/lentes-sol-tendencia', [ProductoController::class, 'tendencia'])->name('productos.tendencia');
Route::get('/lentes-oftalmologicos-moda', [ProductoController::class, 'oftalmologicos'])->name('productos.oftalmologicos');
Route::get('/lentes-contacto-destacados', [ProductoController::class, 'contacto'])->name('productos.contacto');

// Ruta para reservar citas
Route::get('/reservar-cita', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservar-cita', [ReservaController::class, 'store'])->name('reservas.store');

// Rutas para testimonios (index y creación de testimonios)
Route::get('/testimonios', [TestimonioController::class, 'index'])->name('testimonios.index');
Route::post('/testimonios', [TestimonioController::class, 'store'])->name('testimonios.store');

Route::get('/productos', [PagesController::class, 'productos'])->name('productos');
Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('/carrito', [CarritoController::class, 'ver'])->name('carrito.ver');
