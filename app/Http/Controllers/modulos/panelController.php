<?php

namespace App\Http\Controllers\modulos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class panelController extends Controller
{
    public function show(){
        try {
            if (Auth::check() && Auth::user()->estado) {

                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                $areas = Auth::user()->area;
                return view('modulos.panel', compact('username','cargo','imagen','areas'));
            }else{
                return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            }
        } catch (\Throwable $th) {
            Log::error('Error [showModulos]'.$th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }

    }
}
