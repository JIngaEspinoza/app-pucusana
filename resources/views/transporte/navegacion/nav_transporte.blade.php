@extends('templates.navegacion')

@section('head')
    <!-- En esta seccion se pondran los links de losa rchivos css-->
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/scss/templates/main-templates.scss',
    'resources/scss/transporte/pagos/main-pagos.scss',
    'resources/scss/transporte/reportes/main-reportes.scss',
    'resources/scss/transporte/papeletas/main-papeletas.scss',
    'resources/scss/transporte/vehiculos/main-vehiculos.scss'])
    {{-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"> --}}
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
        style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/fotouser.jpeg' }});">
    </div>
@endsection

@section('userName','FERNANDO FERN')


@section('userRol','Super Admin')


@section('contenido')
    @include('transporte.vehiculo.index_vehiculos')
    @include('transporte.reportes.index_reportes')
    @include('transporte.papeletas.index_papeletas')
    @include('transporte.pagos.index_pagos')
@endsection

@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @vite(['resources/js/transporte/nav_transporte.js','resources/js/transporte/vehiculo.js'])

@endsection

