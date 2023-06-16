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



//Esta parte se va a cambiar, esta de esa forma por fines de desarrollo

Route::get('/modulos', function () {
    return view('modulos.panel');
})->name ('modulos');

Route::get('/consulta-vehicular', function () {
    $title = 'Consulta vehicular';
    return view('navegacion.panelnav',compact('title'));
});
Route::get('/orden-de-pago', function () {
    $title = 'Orden de pago';
    return view('navegacion.panelnav',compact('title'));
});
Route::get('/reportes-laborales', function () {
    $title = 'Reportes laborales';
    return view('navegacion.panelnav',compact('title'));
});
Route::get('/papeletas', function () {
    $title = 'Papeletas';
    return view('navegacion.panelnav',compact('title'));
});


// Route::get('/ordenes-de-pago', function () {
//     $title = 'Orden de pago';
//     return view('transporte.pagos.indexPagos',compact('title'));
// })->name ('pagos');

// Route::get('/reportes-laborales', function () {
//     $title = 'Reportes laborales';
//     return view('transporte.reportes.indexReportes',compact('title'));
// })->name ('reportes');

// Route::get('/consulta-vehicular', function () {
//     $title = 'Consulta vehicular';
//     return view('transporte.vehiculo.indexVehiculos',compact('title'));
// })->name ('vehiculos');

// Route::get('/papeletas', function () {
//     $title = 'Papeletas';
//     return view('transporte.papeletas.indexPapeletas',compact('title'));
// })->name ('papeletas');


