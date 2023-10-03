<?php

namespace App\Http\Controllers\Transporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incidence;
use App\Models\Type;
use App\Models\Sub_type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IncidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $incidence = new Incidence();
            $incidence->id_user = Auth::user()->id; //$request->input('inspector');
            $incidence->fecha = $request->input('fecha');
            $incidence->lugar = $request->input('lugar');
            // $incidence->hora = $request->input('hora');
            $incidence->id_tipo = $request->input('tipo');
            $incidence->id_subtipo = $request->input('subtipo');
            $incidence->obs = $request->input('obs');
            $incidence->save();
            // dd($incidence); die();

            return response()->json(['title' => 'Muy bien', 'text' => 'Se registro existosamente'], 200);
        } catch (\Throwable $th) {
            Log::error('Error [create]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getAllTypes()
    {
        
        try {
            $types = Type::all();

            return response()->json($types, 200);
        } catch (\Throwable $th) {
            Log::error('Error [create]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }

    public function getSubTypeById($type_id)
    {
        try {
            $subtypes = Sub_type::where('id_tipo', $type_id)->select('id','subtipo_nombre')->get();
            
            return response()->json($subtypes, 200);
        } catch (\Throwable $th) {
            Log::error('Error [create]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }
}
