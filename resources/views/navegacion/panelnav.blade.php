<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navegación</title>
</head>

<body>
    <div class="fondo">
        <div class="cuerpo">
            <nav class="nav_cuerpo">

                <img class="ola_superior" src="{{ asset('storage') . '/' . 'uploads/navegacion/olasuperior.svg' }}">

                <div class="items">
                    <a id="item-usuario" class="item">
                        <div class="item__icono usuario"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_usuarios.svg' }});">
                        </div>
                        <span class="item__nombre">Usuarios</span>
                    </a>

                    <a class="item">

                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_consulta.svg' }});">
                        </div>
                        <span class="item__nombre">Consulta Vehícular</span>
                    </a>

                    <a class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_reporte.svg' }});">
                        </div>
                        <span class="item__nombre">Reporte Laborales</span>
                    </a>

                    <a class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_papeletas.svg' }});">
                        </div>
                        <span class="item__nombre">Papeletas</span>
                    </a>

                    <a class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_ordenpago.svg' }});">
                        </div>
                        <span class="item__nombre">Orden de Pago</span>
                    </a>
                    <a class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_modulos.svg' }});">
                        </div>
                        <span class="item__nombre">Modulos</span>
                    </a>
                    <a class="item">
                        <div class="item__icono"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_cerrarsesion.svg' }});">
                        </div>
                        <span class="item__nombre">Cerrar Sesión</span>
                    </a>


                </div>

                <img class="ola_inferior" src="{{ asset('storage') . '/' . 'uploads/navegacion/olainferior.svg' }}">

            </nav>
            <div class="seccion">
                <div class="barra"></div>
                <div class="contenido">

                </div>
            </div>
        </div>


    </div>



    @vite(['resources/scss/navegacion/main-navegacion.scss', 'resources/js/navegacion/navegacion.js'])

    {{-- /*no poner nada */ --}}


</body>

</html>
