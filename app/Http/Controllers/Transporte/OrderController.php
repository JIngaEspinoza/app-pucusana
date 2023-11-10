<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\DetailsOrders;
use App\Models\Entidade;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function showConsulta()
    {
        try {
            if (Auth::check() && Auth::user()->estado) {
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                $title = 'Pagos';
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
                $title = 'Pagos';
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

    public function obtenerDatosPagos()
    {
        try {
            $orders = Order::All();
            $ordersData = [];

            foreach ($orders as $order) {
                $orderData = [
                    'id'=> $order->id,
                    'id_entidad' => $order->id_entidad,
                    'placa' => $order->placa,
                    'fecha' => $order->fecha,
                    'observacion' => $order->observacion
                ];

                // Agregar los datos del vehículo al arreglo de resultados
                $ordersData[] = $orderData;
            }

            return response()->json($ordersData, 200);
        } catch (\Throwable $th) {
            Log::error('Error [obtenerDatosPagos]' . $th);
            return response()->json($th);
        }
    }

    public function store(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'id_entidad' => 'required',
            'placa' => 'required',
            'fecha' => 'required',
            'observacion' => 'required',
            'id_service' => 'required|array',
            'importe' => 'required|array',
            'descuento' => 'array',
        ]);

        // Crear una nueva orden
        $order = Order::create([
            'id_entidad' => $request->id_entidad,
            'placa' => $request->placa,
            'fecha' => $request->fecha,
            'observacion' => $request->observacion,
        ]);

        // Almacenar los detalles de la orden
        $id_order = $order->id;
        $services = $request->id_service;
        $importes = $request->importe;
        $descuentos = $request->descuento;

        foreach ($services as $key => $service) {
            DetailsOrders::create([
                'id_order' => $id_order,
                'id_service' => $service,
                'importe' => $importes[$key],
                'descuento' => isset($descuentos[$key]) ? $descuentos[$key] : null,
            ]);
        }

        // Redirigir o devolver una respuesta según tus necesidades
        return redirect()->route('nombre_de_la_ruta'); // Cambia 'nombre_de_la_ruta' por la ruta que necesites
    }

    public function getOffenders()
    {
        $offenders = Entidade::all(); // Obtén los datos de Offender desde tu modelo

        return response()->json($offenders);
    }

    public function getServices()
    {
        $services = Services::all();

        return response()->json($services);
    }
}
