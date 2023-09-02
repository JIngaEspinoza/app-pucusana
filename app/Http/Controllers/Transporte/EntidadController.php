<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Entidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EntidadController extends Controller
{

    public function searchEntity($param)
    {
        // $entidad = Entidade::select('id', 'nombres', 'apellidos')
        // ->where('dni', $param)
        // ->orWhereRaw("CONCAT(apellidos, ' ', nombres) = ?", [$param])
        // ->first();

        $entidad = Entidade::select('id', 'nombres', 'apellidos')
            ->where('dni', $param)
            ->orWhere(function ($query) use ($param) {
                $query->whereRaw("CONCAT(apellidos, ' ', nombres) = ?", [$param])
                    ->orWhereRaw("CONCAT(apellidos, ' ', REGEXP_REPLACE(nombres, '[[:space:]]+', ' ')) = ?", [$param]);
            })
            ->first();

        return $entidad;

        // return $entidad;

    }
    public function registerEntity(Request $request)
    {
        try {
            // $entidade = Entidade::create($request -> only(['nombre','edad','sexo','dni','direccion','celular']));
            // Log::debug($request);
            $entidade = new Entidade();
            $entidade->nombres = $request->input('nombres');
            $entidade->apellidos = $request->input('apellidos');
            $entidade->edad = $request->input('edad');
            $entidade->sexo = $request->input('sexo');
            $entidade->tipo_documento = $request->input('tipo_documento');
            $entidade->numero_documento = $request->input('numero_documento');
            //dateCumple
            $entidade->direccion = $request->input('direccion');
            $entidade->celular = $request->input('celular');
            $entidade->numero_licencia = '479.335.8863';
            $entidade->email = $request->input('email');
            // $entidade->distrito = $request->input('distrito');
            $entidade->dni = $request->input('numero_documento');
            $entidade->save();

            return response()->json([
                'id_entidad' => $entidade->id, 
                'nombres' => $entidade->nombres, 
                'apellidos' => $entidade->apellidos, 
                'title' => 'Muy bien',
                'text' => 'Registrado exitosamente'], 200);
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }
}
