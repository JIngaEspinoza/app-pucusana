<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de Modulos</title>
</head>

<body>
    <div class="vector_cabecera"
        style="background-image: url({{ asset('storage') . '/' . 'uploads/modulos/cabecera_modelos.svg' }});">

        <div class="logopucu">
            <div class="logo_marcagua"
                style="background-image: url({{ asset('storage') . '/' . 'uploads/modulos/todosomospucu.svg' }});">
            </div>
        </div>

        <div class="padreuser">
            <div class="card-usuario">

                <div class="foto">
                    <div class="foto__url"
                        style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/fotouser.svg' }});">
                    </div>
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

    <div class="vectores">

        <img class="vector_izquierda" src="{{ asset('storage') . '/' . 'uploads/modulos/vector_modeloiz.svg' }}">
        <img class="vector_derecha" src="{{ asset('storage') . '/' . 'uploads/modulos/vector_modelode.svg' }}">

    </div>

    <div class="tarjetas">
        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/transporte.svg',
            'title' => '<p>TRANSPORTE</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_transporte.svg',
            'descripcion' => '<p>Gerencia de Seguridad Ciudadana, Fizcalización y Control</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/seguridad.svg',
            'title' => '<P>SEGURIDAD CIUDADANA</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_seguridad_ciudadana.svg',
            'descripcion' => '<p>Gerencia de Seguridad Ciudadana, Fizcalización y Control</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/gestion_desastres.svg',
            'title' => '<p>GESTIÓN Y RIESGOS</p><p>DE DESASTRES</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_gestion_riesgo.svg',
            'descripcion' => '<p>Gerencia de Desarrollo Económico y Turismo</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/fiscalizacion.svg',
            'title' => '<p>FISCALIZACIÓN Y CONTROL</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_fiscalizacionycontrol.svg',
            'descripcion' => '<p>Gerencia de Seguridad Ciudadana, Fizcalización y Control</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/turismo.svg',
            'title' => '<p>DESARROLLO ECONÓMICO</p><p>Y TURISMO</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_turismo.svg',
            'descripcion' => '<p>Gerencia de Desarrollo Económico y Turismo</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/salud_sanidad.svg',
            'title' => '<p>SANIDAD Y SALUD</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_saludysanidad.svg',
            'descripcion' => '<p>Gerencia de Desarrollo Humano y Social</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/desarrollo_social.svg',
            'title' => '<p>DESARROLLO SOCIAL, DEMUNA, OMAPED, CIAM</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_desarrollosocial.svg',
            'descripcion' => '<p>Gerencia de Desarrollo Humano y Social</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/contabilidad.svg',
            'title' => '<p>CONTABILIDAD</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_contabilidad.svg',
            'descripcion' => '<p>Gerencia de Administración y Finanzas</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/sistemas.svg',
            'title' => '<p>TEC. DE LA INFORMACIÓN Y</p><p>SISTEMAS</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_sistemas.svg',
            'descripcion' => '<p>Gerencia Municipal</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/administracion_tributaria.svg',
            'title' => '<p>ADMINISTRACIÓN TRIBUTARIA</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_administracion_tributaria.svg',
            'descripcion' => '<p>Gerencia de Administración y Finanzas</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/tesoreria.svg',
            'title' => '<p>TESORERIA</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_tesoreria.svg',
            'descripcion' => '<p>Gerencia de Administración y Finanzas</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/fizcalizacion_tributaria.svg',
            'title' => '<p>FIZCALIZACIÓN</p><p>TRIBUTARIA</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_fiscalizacion_tributaria.svg',
            'descripcion' => '<p>Gerencia de Administración Tributaria</p>',
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/moduloregistrousuario.svg',
            'title' => '<p>USUARIOS</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/sinicono.svg',
            'descripcion' => '<p>Usuarios</p>',
        ])

    </div>

    @vite(['resources/scss/modulos/main-panel.scss'])

    {{-- /*no poner nada */ --}}


</body>

</html>
