@extends('templates.navegacion')

@section('head')
    <!-- En esta seccion se pondran los links de losa rchivos css-->
    <title>{{$title}}</title>

@endsection

@section('itemDinamic')
    <div id="itemConsulta" class="item">

        <div class="item__icono iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_consulta.svg' }});">
        </div>
        <div class="item__icono--blanco disable iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_consulta_blanco.svg' }});">
        </div>
        <span class="item__nombre">Consulta Vehícular</span>
    </div>

    <div id="itemReporte" class="item">
        <div class="item__icono iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_reporte.svg' }});">
        </div>
        <div class="item__icono--blanco disable iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_reporte_blanco.svg' }});">
        </div>
        <span class="item__nombre">Reporte Laborales</span>
    </div>

    <div id="itemPapeleta" class="item">
        <div class="item__icono iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_papeletas.svg' }});">
        </div>
        <div class="item__icono--blanco disable iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_papeletas_blanco.svg' }});">
        </div>
        <span class="item__nombre">Papeletas</span>
    </div>

    <div id="itemPago" class="item">
        <div class="item__icono iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_ordenpago.svg' }});">
        </div>
        <div class="item__icono--blanco disable iconOption"
            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_ordenpago_blanco.svg' }});">
        </div>
        <span class="item__nombre">Orden de Pago</span>
    </div>
@endsection

@section('userFoto')
    <div class="foto__url"
        style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/fotouser.svg' }});">
    </div>
@endsection

@section('userName','Hilton Bill')


@section('userRol','Super Admin')


@section('contenido')
    @include('transporte.vehiculo.index_vehiculos')
    @include('transporte.reportes.index_reportes')
    @include('transporte.papeletas.index_papeletas')
    @include('transporte.pagos.index_pagos')
@endsection

@section('footer')
    @vite(['resources/scss/templates/main-templates.scss','resources/js/transporte/nav_transporte.js'])
@endsection

