<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use App\Models\Entidade;
use App\Models\Infraction;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{

    public function showConsulta()
    {
        try {

            if (Auth::check() && Auth::user()->estado) {
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                $title = 'Papeletas';
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
                $title = 'Papeletas';
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

    public function getOffenders()
    {
        $offenders = Entidade::all(); // Obtén los datos de Offender desde tu modelo

        return response()->json($offenders);
    }

    public function getInfracciones()
    {
        $infracciones = Infraction::all();

        return response()->json($infracciones);
    }

    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->id_offender = $request->input('id_offender');
        $ticket->direccion = $request->input('direccion');
        $ticket->placa = $request->input('placa');
        $ticket->id_infraction = $request->input('id_infraction');
        $ticket->nro_papeleta = $request->input('nro_papeleta');
        $ticket->ord_liberacion_vehicular = $request->input('ord_liberacion_vehicular');

        $ruta = 'uploads/imagenes';

        $ticket->img_papeleta = '';
        $ticket->img_liberacion_vehicular = '';


        if ($request->hasFile('img_papeleta')) {
            $ruta = 'uploads/imagenes'; // Ruta relativa a public/storage
            $imagenImgPapeleta = $request->file('img_papeleta')->store($ruta, 'public');
            $ticket->img_papeleta = Storage::url($imagenImgPapeleta);
        }

        if ($request->hasFile('img_liberacion_vehicular')) {
            $ruta = 'uploads/imagenes'; // Ruta relativa a public/storage
            $img_liberacion_vehicular = $request->file('img_liberacion_vehicular')->store($ruta, 'public');
            $ticket->img_liberacion_vehicular = Storage::url($img_liberacion_vehicular);
        }

        $ticket->id_user = auth()->user()->id;
        $ticket->save();

        return back()->with('success', 'El vehículo ha sido registrado con éxito.');
    }

    public function obtenerDatosTickets()
    {
        try {

            // if (Auth::check() && Auth::user()->estado) {
            $tickets = Ticket::All();
            $ticketsData = [];

            foreach ($tickets as $ticket) {
                $ticketData = [
                    'id_offender' => $ticket->id_offender,
                    'direccion' => $ticket->direccion,
                    'placa' => $ticket->placa
                ];

                // Agregar los datos del vehículo al arreglo de resultados
                $ticketsData[] = $ticketData;
            }

            return response()->json($ticketsData, 200);
        } catch (\Throwable $th) {
            Log::error('Error [obtenerDatosVehiculos]' . $th);
            return response()->json($th);
        }
    }
}
