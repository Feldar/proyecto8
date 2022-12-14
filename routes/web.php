<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
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
// ------------------------------------- @ My Routes:
Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', [AuthController::class, 'getLogin']);

Route::get('/logout', [AuthController::class, 'getLogout']);

Route::get('/register', [AuthController::class, 'getRegister']);

Route::prefix('productos')->group(function() {
    // Se Acceden con el Prefijo  '/productos/...'
    Route::get('/', [ProductoController::class, 'getIndex']);

    Route::get('/create', [ProductoController::class, 'getCreate']);

    Route::get('/show/{id}', [ProductoController::class, 'getShow']);

    Route::get('/edit/{id}', [ProductoController::class, 'getEdit']);
});
