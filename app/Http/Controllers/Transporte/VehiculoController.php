<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Entidade;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VehiculoController extends Controller
{
    public function show(){
        return view('transporte.vehiculo.register');

    }
    public function create(Request $request){

        $vehiculo = Vehiculo::create($request->only(['empresa', 'placa', 'id_propietario', 'id_chofer','numero_municipal', 'estado_inspeccion', 'fecha_inspeccion', 'curso_vial', 'estado_credencial', 'fecha_credencial', 'estado']));
        return redirect('/consulta-vehicular/consulta')->with('success','Se Registro existosamente');
    }

    public function showConsulta() {
        $title = 'Consulta vehicular';
        $accion = 'Consulta';
        return view('transporte.navegacion.nav_transporte',compact('title','accion'));
    }

    public function showRegistro() {
        $title = 'Consulta vehicular';
        $accion = 'Registro';
        return view('transporte.navegacion.nav_transporte',compact('title','accion'));
    }

    public function searchVehiculo($param){
        Log::debug('$param'.$param);
        $vehiculo = Vehiculo::where('placa',$param)->first();
        Log::debug($vehiculo);
        if ($vehiculo) {
            Log::debug('$vehiculo->id_propietario :'.$vehiculo->id_propietario);
            $propietario = Entidade::where('id_entidad', $vehiculo->id_propietario)->first();
            Log::debug('propietario'.$propietario);
            $chofer = Entidade::where('id_entidad', $vehiculo->id_chofer)->first();
            // $chofer = Entidade::find($vehiculo->id_chofer);
            Log::debug('chofer'.$chofer);
            $vehiculo->nombre_propietario = $propietario->nombre;
            $vehiculo->nombre_chofer = $chofer->nombre;
        }
        return $vehiculo;

    }
}
