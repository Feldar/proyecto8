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
// ------------------------------------- @ My Routes:
Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/logout', function () {
    return view('auth.logout');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::prefix('productos')->group(function() {
    Route::get('/', function () {
        return view('productos.index');
    });
    Route::get('/show/{id}', function () {
        return view('productos.show');
    });
    Route::get('/create', function () {
        return view('productos.create');
    });
    Route::get('/edit/{id}', function () {
        return view('productos.edit');
    });
});
