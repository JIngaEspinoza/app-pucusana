<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>

<body>
    <div class="fondo">
        <div class="cuerpo">
            <nav class="nav_cuerpo">

                <img class="ola_superior" src="{{ asset('storage') . '/' . 'uploads/navegacion/olasuperior.svg' }}">

                <div class="items">
                    <div id="itemUsuario" class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_usuarios.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_usuarios_blanco.svg' }});">
                        </div>
                        {{-- <i class="fa-regular fa-user"></i> --}}
                        <span class="item__nombre">Usuarios</span>
                    </div>

                    <div id="itemConsulta" class="item">

                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_consulta.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_consulta_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Consulta Vehícular</span>
                    </div>

                    <div id="itemReporte" class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_reporte.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_reporte_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Reporte Laborales</span>
                    </div>

                    <div id="itemPapeleta" class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_papeletas.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_papeletas_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Papeletas</span>
                    </div>

                    <div id="itemPago" class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_ordenpago.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_ordenpago_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Orden de Pago</span>
                    </div>
                    <a class="item" href="{{route('modulos')}}">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_modulos.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_modulos_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Modulos</span>
                    </a>
                    <a class="item" href="{{route('login')}}">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_cerrarsesion.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_cerrarsesion_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Cerrar Sesión</span>
                    </a>


                </div>

                <img class="ola_inferior" src="{{ asset('storage') . '/' . 'uploads/navegacion/olainferior.svg' }}">

            </nav>
            <div class="seccion">
                <div class="barra">
                    <div class="burguer-icon">
                        <div class="menu-burguer">
                            <div class="menu-line"></div>
                            <div class="menu-line"></div>
                            <div class="menu-line"></div>
                        </div>
                    </div>
                    <div class="opciones">
                        <div class="luna"></div>
                        <div class="full-screen"></div>
                        <div class="card-usuario">
                            <div class="foto">
                                <div class="foto__url" style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/fotouser.svg' }});"></div>
                            </div>
                            <div class="info">
                                <div class="nombre">
                                    <span>Hilton Bill</span>
                                </div>
                                <div class="rol">
                                    <span>Super Admin</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="contenido">
                   @include('transporte.vehiculo.indexVehiculos')
                   @include('transporte.reportes.indexReportes')
                   @include('transporte.papeletas.indexPapeletas')
                   @include('transporte.pagos.indexPagos')
                </div>
            </div>
        </div>


    </div>



    @vite(['resources/scss/navegacion/main-navegacion.scss', 'resources/js/navegacion/navegacion.js'])

    {{-- /*no poner nada */ --}}


</body>

</html>
