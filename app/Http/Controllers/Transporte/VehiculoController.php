<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function show(){
        return view('transporte.vehiculo.register');

    }
    public function create(Request $request){

        $vehiculo = Vehiculo::create($request->only(['empresa', 'placa', 'id_propietario', 'id_chofer','numero_municipal', 'estado_inspeccion', 'fecha_inspeccion', 'curso_vial', 'estado_credencial', 'fecha_credencial', 'estado']));
        return redirect('/')->with('success','Se Registro existosamente');
    }
}
