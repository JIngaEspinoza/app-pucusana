<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    @vite(['resources/scss/navegacion/main-navegacion.scss'])
</head>

<body>
    <div class="fondo">
        <div id="cuerpo-main" class="cuerpo">
            <nav id="nacCuerpo" class="nav_cuerpo">
                <div class="ola_superior">
                    <img class="ola_superior__url"
                        src="{{ asset('storage') . '/' . 'uploads/navegacion/olasuperior.svg' }}">
                    {{-- <div class="ola_superior__url"
                        style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/olasuperior.svg' }});">
                    </div> --}}
                    <div class="logo-pucu">
                        <div class="logo-pucu__url"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/escudo.svg' }});">
                        </div>
                    </div>
                </div>


                <div class="items">

                    @yield('itemDinamic')
                    <a class="item" href="{{ route('modulos') }}">
                        <div class="item__icono iconOption"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_modulos.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable iconOption"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_modulos_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Modulos</span>
                    </a>
                    <a id="logout" class="item" href="#">
                        <div class="item__icono iconOption"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_cerrarsesion.svg' }});">
                        </div>
                        <div class="item__icono--blanco disable iconOption"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_cerrarsesion_blanco.svg' }});">
                        </div>
                        <span class="item__nombre">Cerrar Sesión</span>
                    </a>


                </div>
                <div class="ola_inferior">
                    <img class="ola_inferior__url"
                        src="{{ asset('storage') . '/' . 'uploads/navegacion/olainferior.svg' }}">
                </div>


            </nav>
            <div class="seccion">
                <div class="barra">
                    <div id="burguerIcon" class="burguer-icon">
                        <div class="menu-burguer">
                            <div class="menu-line"></div>
                            <div class="menu-line"></div>
                            <div class="menu-line"></div>
                        </div>
                    </div>
                    <div class="opciones">



                        <div class="card-usuario">
                            <div class="foto">
                                <div class="foto__url"
                                    style="background-image: url({{ asset('storage') . '/' . $imagen }});">
                                </div>
                            </div>
                            <div class="info">
                                <div class="nombre">
                                    <span>{{ $username }}</span>
                                </div>
                                <div class="rol">
                                    <span>{{ $cargo }}</span>
                                </div>

                            </div>
                        </div>
                        <div class="screen">
                            <div class="screen__url"
                                style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/screen.svg' }});">
                            </div>
                        </div>
                        <div class="luna">
                            <div class="luna__url"
                                style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/luna.svg' }});">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contenido-principal" class="contenido">
                    @yield('contenido')
                </div>
            </div>
        </div>


    </div>



    @vite(['resources/js/navegacion/navegacion.js'])
    @yield('footer')
    {{-- /*no poner nada */ --}}


</body>

</html>
