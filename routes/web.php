<?php

use App\Http\Controllers\Transporte\VehiculoController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/iniciar-sesion','showLogin')->name ('login');
});
Route::controller(VehiculoController::class)->group(function () {
    Route::get('/registrar-vehiculo','show');
    Route::post('/registrar-vehiculo', 'create')->name ('vehiculos.store');
});

Route::get('/modulos', function () {
    return view('modulos.panel');
});

Route::get('/navegacion', function () {
    return view('navegacion.nav');
});