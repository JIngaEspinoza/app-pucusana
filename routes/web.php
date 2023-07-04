<?php

use App\Http\Controllers\Transporte\EntidadController;
use App\Http\Controllers\Transporte\VehiculoController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Log;
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
    Route::post('/registrar-usuario','registerUser')->name('auth.registro');
    Route::post('/cambiar-credencial','changePass')->name('auth.pass');
    Route::get('/usuarios/registro','showRegister')->name('auth.mostrar.registro');
    Route::get('/usuarios/contrasena','showPassword')->name('auth.mostrar.contrasena');
    Route::get('/usuarios/lista-de-usuarios','showList')->name('auth.lista');

    Route::get('/buscar-username/{param}','searchUsername');
    Route::get('/buscar-email/{param}','searchEmail');
    Route::get('/buscar-username-or-email/{param}','validateUsernameOrEmail');
    Route::post('/actualizar-password','updatePassword')->name('auth.update.pass');

    Route::get('/usuarios-listado','userList');
});



// Route::get('/usuarios/contrasena', function () {
//     $accion = 'Contraseña';
//     return view('usuarios.index_usuarios',compact('accion'));
// })->name ('usuarios.contrasena');

// Route::get('/usuarios/lista-de-usuarios', function () {
//     $accion = 'Lista de usuarios';
//     return view('usuarios.index_usuarios',compact('accion'));
// })->name ('usuarios.lista');

Route::controller(VehiculoController::class)->group(function () {
    // Route::get('/registrar-vehiculo','show');
    Route::post('/registrar-vehiculo', 'create')->name ('vehiculos.store');

    Route::get('/consulta-vehicular/consulta','showConsulta')->name('vehiculo.consulta');
    Route::get('/consulta-vehicular/registro', 'showRegistro')->name('vehiculo.registro');
    Route::get('/buscar-vehiculo/{param}','searchVehiculo');
});

Route::controller(EntidadController::class)->group(function () {

    Route::get('/buscar-entidad/{param}','searchEntity');
    Route::post('/registrar-entidad','registerEntity')->name ('entity.register');

});



//Esta parte se va a cambiar, esta de esa forma por fines de desarrollo

Route::get('/modulos', function () {
    return view('modulos.panel');
})->name ('modulos');




Route::get('/orden-de-pago/consulta', function () {
    $title = 'Orden de pago';
    $accion = 'Consulta';
    return view('transporte.navegacion.nav_transporte',compact('title','accion'));
});
Route::get('/reportes-laborales/consulta', function () {
    $title = 'Reportes laborales';
    $accion = 'Consulta';
    return view('transporte.navegacion.nav_transporte',compact('title','accion'));
});
Route::get('/papeletas/consulta', function () {
    $title = 'Papeletas';
    $accion = 'Consulta';
    return view('transporte.navegacion.nav_transporte',compact('title','accion'));
});



Route::get('/orden-de-pago/registro', function () {
    $title = 'Orden de pago';
    $accion = 'Registro';
    return view('transporte.navegacion.nav_transporte',compact('title','accion'));
});
Route::get('/reportes-laborales/registro', function () {
    $title = 'Reportes laborales';
    $accion = 'Registro';
    return view('transporte.navegacion.nav_transporte',compact('title','accion'));
});
Route::get('/papeletas/registro', function () {
    $title = 'Papeletas';
    $accion = 'Registro';
    return view('transporte.navegacion.nav_transporte',compact('title','accion'));
});

Route::get('/p', function () {
    return view('prueba.prueba');
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

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


