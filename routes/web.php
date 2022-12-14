<?php
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

// Imports:
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;

// ------------------------------------- @ My Routes:
Route::get('/', [HomeController::class, 'getHome']);

// Auth Sesion:
Route::get('/login', function() {
    return view('auth.login');
});
Route::get('/logout', function() {
    return view('auth.logout');
});
Route::get('/register', function() {
    return view('auth.register');
});

// Productos:
Route::prefix('productos')->group(function() {
    // Se Acceden con el Prefijo  '/productos/...'
    Route::get('/', [ProductosController::class, 'getIndex']);
    Route::get('/create', [ProductosController::class, 'getCreate']);
    Route::get('/show/{id}', [ProductosController::class, 'getShow']);
    Route::get('/edit/{id}', [ProductosController::class, 'getEdit']);
});