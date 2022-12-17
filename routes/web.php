<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;

// ------------------------------------- @ My Routes:
Route::get('/', [HomeController::class, 'getHome']);

// Productos:
Route::prefix('productos')->middleware(['auth'])->name('getHome')->group(function() {
    // Se Acceden con el Prefijo  '/productos/...'
    Route::get('/', [ProductosController::class, 'getIndex']);
    Route::get('/create', [ProductosController::class, 'getCreate']);
    Route::post('/create', [ProductosController::class, 'postCreate']);
    Route::get('/show/{id}', [ProductosController::class, 'getShow']);
    Route::get('/edit/{id}', [ProductosController::class, 'getEdit']);
    Route::put('/edit/{id}', [ProductosController::class, 'putEdit']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
