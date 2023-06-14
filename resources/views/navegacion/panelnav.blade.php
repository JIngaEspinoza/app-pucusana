<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navegación</title>
</head>

<body>
    </head>

    <body>

        <div class="fondo">
            <div class="cuerpo">
                <nav class="nav_cuerpo">

                    <img class="ola_superior" src="{{ asset('storage') . '/' . 'uploads/navegacion/olasuperior.svg' }}">

                    <div class="items">
                        <a class="item">
                            <img class="item__icono"
                                src="{{ asset('storage') . '/' . 'uploads/navegacion/icono_usuarios.svg' }}">
                            <span class="item__nombre">Usuario</span>
                        
                        </a>

                        <a class="item">
                            <img class="item__icono"
                                src="{{ asset('storage') . '/' . 'uploads/navegacion/icono_consulta.svg' }}">
                            <span class="item__nombre">Consulta Vehícular</span>
                        </a>

                        <a class="item">
                            <img class="item__icono"
                                src="{{ asset('storage') . '/' . 'uploads/navegacion/icono_reporte.svg' }}">
                            <span class="item__nombre">Reporte Laborales</span>
                        </a>

                        <a class="item">
                            <img class="item__icono"
                                src="{{ asset('storage') . '/' . 'uploads/navegacion/icono_papeletas.svg' }}">
                            <span class="item__nombre">Papeletas</span>
                        </a>

                        <a class="item">
                            <img class="item__icono"
                                src="{{ asset('storage') . '/' . 'uploads/navegacion/icono_ordenpago.svg' }}">
                            <span class="item__nombre">Oden de Pago</span>
                        </a>


                    </div>
                    
                    <img class="ola_inferior" src="{{ asset('storage') . '/' . 'uploads/navegacion/olainferior.svg' }}">

                </nav>
                <div class="seccion">
                    <div class="barra"></div>
                    <div class="contenido">
                        <div class="paginacion"></div>
                        <div class="cuadro"></div>
                    </div>
                </div>
            </div>


        </div>



        @vite(['resources/scss/navegacion/main-navegacion.scss'])

        {{-- /*no poner nada */ --}}


    </body>

</html>
