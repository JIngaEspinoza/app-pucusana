<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Entidade;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        // $request->validate([
        //     'id_entidad' => 'required|integer',
        //     'placa' => 'required|string',
        //     'fecha' => 'required|date',
        //     'observacion' => 'required|string',
        // ]);
    
        // Crear un nuevo registro de orden en la base de datos
        $order = new Order();
        $order->id_entidad = $request->input('id_entidad');
        $order->placa_rodaje = $request->input('placa');
        $order->fecha = $request->input('fecha');
        $order->observacion = $request->input('observacion');
    
        // Guardar la orden en la base de datos
        $order->save();
    
        // Redireccionar a una vista o realizar alguna otra acción (por ejemplo, mostrar un mensaje de éxito)
        return redirect()->route('orders.index')->with('success', 'Orden creada exitosamente.');
    }

    public function getOffenders()
    {
        $offenders = Entidade::all(); // Obtén los datos de Offender desde tu modelo

        return response()->json($offenders);
    }
}
