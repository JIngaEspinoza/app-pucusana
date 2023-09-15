<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Adicional;
use App\Models\Entidade;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    public function show()
    {
        return view('transporte.vehiculo.register');
    }
    public function create(Request $request)
    {
        try {
            $vehiculo = new Vehiculo();
            $vehiculo->numero_licencia = $request->input('numero_licencia');
            $vehiculo->numero_municipal = $request->input('numero_municipal');
            $vehiculo->empresa = $request->input('empresa');
            $vehiculo->placa = $request->input('placa');
            $vehiculo->id_propietario = $request->input('id_propietario');
            $vehiculo->id_chofer = $request->input('id_chofer');
            $vehiculo->save();
            // dd($vehiculo);

            if ($request->input('estado_inspeccion') != 'Ninguno') {
                $adicional = new Adicional();
                $adicional->id_vehiculo = $vehiculo->id;
                $adicional->tipo = 'Inspeccion Vehicular';
                $adicional->numero = $request->input('numero_inspeccion_vehicular');
                $adicional->estado = $request->input('estado_inspeccion');
                $adicional->fecha_emision = $request->input('fecha_inspeccion_emision');
                $adicional->fecha_caducidad = $request->input('fecha_inspeccion_caducidad');
                $adicional->flag = 'INSPECCION';
                $adicional->save();
            }

            // if ($request->input('estado_credencial') != 'Ninguno') {
            //     $adicional = new Adicional();
            //     $adicional->id_vehiculo = $vehiculo->id;
            //     $adicional->tipo = 'Credencial vehicular';
            //     $adicional->numero = $request->input('numero_credencial_vehicular');
            //     $adicional->estado = $request->input('estado_credencial');
            //     $adicional->fecha_emision = $request->input('fecha_credencial_emision');
            //     $adicional->fecha_caducidad = $request->input('fecha_credencial_caducidad');
            //     $adicional->save();
            // }

            // if ($request->input('estado_seguridad_vial') != 'Ninguno') {
            //     $adicional = new Adicional();
            //     $adicional->id_vehiculo = $vehiculo->id;
            //     $adicional->tipo = 'Curso Seguridad Vial';
            //     $adicional->numero = $request->input('numero_seguridad_vial');
            //     $adicional->estado = $request->input('estado_seguridad_vial');
            //     $adicional->fecha_emision = $request->input('fecha_seguridad_vial_emision');
            //     $adicional->fecha_caducidad = $request->input('fecha_seguridad_vial_caducidad');
            //     $adicional->save();
            // }

            if ($request->input('estado_soat') != 'Ninguno') {
                $adicional = new Adicional();
                $adicional->id_vehiculo = $vehiculo->id;
                $adicional->tipo = 'Inspeccion Vehicular';
                $adicional->numero = $request->input('numero_soat');
                $adicional->estado = $request->input('estado_soat');
                $adicional->fecha_emision = $request->input('fecha_soat_emision');
                $adicional->fecha_caducidad = $request->input('fecha_soat_caducidad');
                $adicional->flag = 'SOAT';
                $adicional->save();
            }

            return response()->json(['title' => 'Muy bien', 'text' => 'Se registro existosamente'], 200);
        } catch (\Throwable $th) {
            Log::error('Error [create]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }

        // $vehiculo = Vehiculo::create($request->only(['numero_licencia','numero_municipal','empresa', 'placa', 'id_propietario', 'id_chofer']));

        //return redirect('/consulta-vehicular/consulta')->with('success', 'Se Registro existosamente');
    }

    public function showConsulta()
    {
        try {
            if (Auth::check() && Auth::user()->estado) {
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                $title = 'Consulta vehicular';
                $accion = 'Consulta';
                return view('transporte.navegacion.nav_transporte', compact('title', 'accion', 'username', 'cargo', 'imagen'));
            } else {
                return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            }
        } catch (\Throwable $th) {
            Log::error('Error [showConsulta]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }

    public function showRegistro()
    {
        try {
            if (Auth::check() && Auth::user()->estado) {
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                $title = 'Consulta vehicular';
                $accion = 'Registro';
                return view('transporte.navegacion.nav_transporte', compact('title', 'accion', 'username', 'cargo', 'imagen'));
            } else {
                return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            }
        } catch (\Throwable $th) {
            Log::error('Error [showRegistro]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }

    public function searchVehiculo($param)
    {

        $vehiculo = Vehiculo::where('placa', $param)->first();

        if ($vehiculo) {

            $propietario = Entidade::where('id', $vehiculo->id_propietario)->first();
            $chofer = Entidade::where('id', $vehiculo->id_chofer)->first();
            $vehiculo->nombre_propietario = $propietario->apellidos . ", " . $propietario->nombres;
            $vehiculo->nombre_chofer = $chofer->apellidos . ", " . $chofer->nombres;

            $inspecciones = Adicional::where('id_vehiculo', $vehiculo->id)->get();
            foreach ($inspecciones as  $inspeccion) {

                if ($inspeccion->tipo == 'Inspeccion Vehicular') {
                    $vehiculo->numero_inspeccion_vehicular = $inspeccion->numero;
                    $vehiculo->estado_inspeccion = $inspeccion->estado;
                    $vehiculo->fecha_inspeccion_emision = $inspeccion->fecha_emision;
                    $vehiculo->fecha_inspeccion_caducidad = $inspeccion->fecha_caducidad;
                }
                if ($inspeccion->tipo == 'Credencial vehicular') {
                    $vehiculo->numero_credencial_vehicular = $inspeccion->numero;
                    $vehiculo->estado_credencial = $inspeccion->estado;
                    $vehiculo->fecha_credencial_emision = $inspeccion->fecha_emision;
                    $vehiculo->fecha_credencial_caducidad = $inspeccion->fecha_caducidad;
                }
                if ($inspeccion->tipo == 'Curso Seguridad Vial') {
                    $vehiculo->numero_seguridad_vial = $inspeccion->numero;
                    $vehiculo->estado_seguridad_vial = $inspeccion->estado;
                    $vehiculo->fecha_seguridad_vial_emision = $inspeccion->fecha_emision;
                    $vehiculo->fecha_seguridad_vial_caducidad = $inspeccion->fecha_caducidad;
                }
                if ($inspeccion->tipo == 'SOAT') {
                    $vehiculo->numero_soat = $inspeccion->numero;
                    $vehiculo->estado_soat = $inspeccion->estado;
                    $vehiculo->fecha_soat_emision = $inspeccion->fecha_emision;
                    $vehiculo->fecha_soat_caducidad = $inspeccion->fecha_caducidad;
                }
            }
        }
        return $vehiculo;
    }

    public function obtenerDatosVehiculos()
    {
        try {

            // if (Auth::check() && Auth::user()->estado) {
                $vehiculos = Vehiculo::leftJoin('entidades AS propietario', 'vehiculos.id_propietario', '=', 'propietario.id')
                    ->leftJoin('entidades AS chofer', 'vehiculos.id_chofer', '=', 'chofer.id')
                    ->select(
                        'vehiculos.id',
                        'vehiculos.placa',
                        'vehiculos.numero_municipal',
                        'vehiculos.empresa',
                        'propietario.apellidos AS apellidos_propietario',
                        'propietario.nombres AS nombres_propietario',
                        'chofer.apellidos AS apellidos_chofer',
                        'chofer.nombres AS nombres_chofer'
                    )
                    ->where('vehiculos.flag', 0)
                    ->get();
                $vehiculosData = [];


                foreach ($vehiculos as $vehiculo) {
                    $vehiculoData = [
                        'id' => $vehiculo->id,
                        'placa' => $vehiculo->placa,
                        'numero_municipal' => $vehiculo->numero_municipal,
                        'empresa' => $vehiculo->empresa,
                        'propietario' => $vehiculo->apellidos_propietario . ' ' . $vehiculo->nombres_propietario,
                        'chofer' => $vehiculo->apellidos_chofer . ' ' . $vehiculo->nombres_chofer,
                    ];

                    // Agregar los datos del vehículo al arreglo de resultados
                    $vehiculosData[] = $vehiculoData;
                }

                return response()->json($vehiculosData, 200);
            // } else {
            //     return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            // }
        } catch (\Throwable $th) {
            Log::error('Error [obtenerDatosVehiculos]' . $th);
            return response()->json($th);
        }
    }

    public function editVehiculoById($param)
    {
        //->leftJoin('ADICIONALS AS A', 'vehiculos.ID', '=', 'A.ID_VEHICULO')
        //->leftJoin('ADICIONALS AS B', 'vehiculos.ID', '=', 'B.ID_VEHICULO')
        // \DB::enableQueryLog();
        $vehiculo = Vehiculo::leftJoin('ENTIDADES AS P', 'vehiculos.ID_PROPIETARIO', '=', 'P.ID')
            ->leftJoin('ENTIDADES AS C', 'vehiculos.ID_CHOFER', '=', 'C.ID')
            ->leftJoin('ADICIONALS AS A', function ($join) {
                $join->on('vehiculos.ID', '=', 'A.ID_VEHICULO');
                $join->on('A.FLAG','=',DB::raw("'INSPECCION'"));
            })
            ->leftJoin('ADICIONALS AS B', function ($join) {
                $join->on('vehiculos.ID', '=', 'B.ID_VEHICULO');
                $join->on('B.FLAG','=',DB::raw("'SOAT'"));
            })
            ->select(
                'vehiculos.ID',
                'vehiculos.PLACA',
                'vehiculos.NUMERO_MUNICIPAL',
                'vehiculos.EMPRESA',
                'P.APELLIDOS AS APELLIDOS_PROPIETARIO',
                'P.NOMBRES AS NOMBRES_PROPIETARIO',
                'C.APELLIDOS AS APELLIDOS_CHOFER',
                'C.NOMBRES AS NOMBRES_CHOFER',
                'A.NUMERO AS NUMERO_INSPECCION',
                'A.ESTADO AS ESTADO_INSPECCION',
                'A.FECHA_EMISION AS FECHA_EMI_INSPECCION',
                'A.FECHA_CADUCIDAD AS FECHA_CAD_INSPECCION',
                'B.NUMERO AS NUMERO_SOAT',
                'B.ESTADO AS ESTADO_SOAT',
                'B.FECHA_EMISION AS FECHA_EMI_SOAT',
                'B.FECHA_CADUCIDAD AS FECHA_CAD_SOAT',
                'vehiculos.ID_PROPIETARIO',
	            'vehiculos.ID_CHOFER',
                'A.ID_VEHICULO AS ID_INSPECCION',
	            'B.ID_VEHICULO AS ID_SOAT'
            )
            ->where('vehiculos.ID', $param)
            ->get();

            // dd(\DB::getQueryLog());

        // $vehiculo = Vehiculo::find($param);
        if ($vehiculo) {
            return response()->json($vehiculo);
        }
    }

    public function update(Request $request)
    {
        try {

            $vehiculo = Vehiculo::find($request->txt_id_vehiculo);
            $vehiculo->numero_municipal = $request->txt_num_municipal;
            $vehiculo->empresa = $request->txt_empresa;
            $vehiculo->placa = $request->txt_placa;
            $vehiculo->id_propietario = $request->txt_id_propietario;
            $vehiculo->id_chofer = $request->txt_id_chofer;
            $vehiculo->save();

            $inspeccion = Adicional::find($request->txt_id_inspeccion);
            $inspeccion->id_vehiculo = $request->txt_id_vehiculo;
            $inspeccion->tipo = 'Credencial Vehicular';
            $inspeccion->estado = $request->cbo_estado_inspeccion;
            $inspeccion->numero = $request->txt_nro_inspeccion;
            $inspeccion->fecha_emision = $request->txt_fecha_emision_inspeccion;
            $inspeccion->fecha_caducidad = $request->txt_fecha_caducidad_inspeccion;
            $inspeccion->save();

            $soat = Adicional::find($request->txt_id_soat);
            $soat->id_vehiculo = $request->txt_id_vehiculo;
            $soat->tipo = 'Inspeccion Vehicular';
            $soat->estado = $request->cbo_estado_soat;
            $soat->numero = $request->txt_nro_soat;
            $soat->fecha_emision = $request->txt_fecha_emision_soat;
            $soat->fecha_caducidad = $request->txt_fecha_caducidad_soat;
            $soat->save();

            return response()->json(['title' => 'Muy bien', 'text' => 'Registro actualizado existosamente'], 200);

        } catch (\Throwable $th) {
            Log::error('Error [update]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }

    public function delete($id)
    {
        try{
            $vehiculo = Vehiculo::find($id);
            $vehiculo->flag = 1;
            $vehiculo->save();
            return response()->json(['title' => 'Muy bien', 'text' => 'Registro se dio de baj existosamente'], 200);
        } catch (\Throwable $th) {
            Log::error('Error [update]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }
}
