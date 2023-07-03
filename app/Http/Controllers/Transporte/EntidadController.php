<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Entidade;
use Illuminate\Http\Request;

class EntidadController extends Controller
{

    public function searchEntity($param){
        $entidad = Entidade::select('id_entidad','nombre')->where('nombre',$param)->orWhere('dni',$param)->first();
        return $entidad;

    }
    public function registerEntity(Request $request){


        // $entidade = Entidade::create($request -> only(['nombre','edad','sexo','dni','direccion','celular']));
        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
        $sexo = $request->input('sexo');
        $dni = $request->input('dni');
        $direccion = $request->input('direccion');
        $celular = $request->input('celular');

        $entidade = new Entidade();
        $entidade->nombre = $nombre;
        $entidade->edad = $edad;
        $entidade->sexo = $sexo;
        $entidade->dni = $dni;
        $entidade->direccion = $direccion;
        $entidade->celular = $celular;
        $entidade->save();

        return response()->json(['id_entidad' => $entidade->id,'nombre' => $entidade->nombre,'message'=>'Entidad registrada exitosamente'],200);
    }
}
