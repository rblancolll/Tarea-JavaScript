<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PerfumeController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Para la tienda
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Rutas de la API para productos
Route::apiResource('productos', ProductController::class);

// Rutas públicas para productos
//Route::get('/productos', [ProductController::class, 'index'])->middleware('check.json');

Route::get('/productos', [ProductController::class, 'index'])->middleware('auth:sanctum'); // Lista pública de productos
Route::post('/productos', [ProductController::class, 'store']); // Crear producto
Route::put('/productos/{id}', [ProductController::class, 'update']); // Actualizar producto
Route::delete('/productos/{id}', [ProductController::class, 'destroy']); // Eliminar producto

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/userinfo', [AuthController::class, 'infouser'])->middleware('auth:sanctum');

Route::get('/api/productos', [ProductController::class, 'index']);

Route::get('/productos', [PerfumeController::class, 'getProductos']);

Route::get('/libros', function ();
