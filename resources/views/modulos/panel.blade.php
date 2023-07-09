<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de Modulos</title>
</head>

<body>
    @vite(['resources/scss/modulos/main-panel.scss'])
    <div class="vector_cabecera"
        style="background-image: url({{ asset('storage') . '/' . 'uploads/modulos/cabecera_modelos.svg' }});">

        <div class="logopucu">
            <div class="logo_marcagua"
                style="background-image: url({{ asset('storage') . '/' . 'uploads/modulos/todosomospucu.svg' }});">
            </div>
        </div>

        <div class="padreuser">
            <div class="card-usuario">



                <div class="info">

                    <div class="nombre">
                        <span>{{$username}}</span>
                    </div>

                    <div class="rol">
                        <span>{{$cargo}}</span>
                    </div>
                </div>
                <div class="foto">
                    <div class="foto__url"
                        style="background-image: url({{ asset('storage') . '/' . $imagen }});">
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
            'imagen' => asset('storage') . '/' . 'uploads/modulos/administracion_finanzas.svg',
            'title' => '<p>ADMINISTRACIÓN Y FINANZAS</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_finanzas.svg',
            'descripcion' => '<p>Recursos Humanos, Tesorería, Logística y Control Patrimonial</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/administracion_tributaria.svg',
            'title' => '<P>ADMINISTRACIÓN TRIBUTARIA</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_administracion_tributaria.svg',
            'descripcion' => '<p>Recaudación y Ejecutora Coactiva, Fiscalización Tributaria</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/asesoria_juridica.svg',
            'title' => '<p>ASESORÍA JURÍDICA</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_juridica.svg',
            'descripcion' => '<p>Asesoría Jurídica</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/planeamiento_presupuesto.svg',
            'title' => '<p>PLANEAMIENTO Y PRESUPUESTO</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_planeamiento.svg',
            'descripcion' => '<p>Planeamiento y Presupuesto</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/desarrollo_urbano.svg',
            'title' => '<p>DESARROLLO URBANO</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_durbano.svg',
            'descripcion' => '<p>Obras Públicas, Estudios y Proyectos, Obras Privadas y Catastro</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/economico_turismo.svg',
            'title' => '<p>DESARROLLO ECONÓMICO Y TURISMO</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_turismo.svg',
            'descripcion' => '<p>Comercialización, Gestión del Riesgo de Desastres</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/desarrollo_social.svg',
            'title' => '<p>DESARROLLO HUMANO SOCIAL</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_desarrollo_social.svg',
            'descripcion' => '<p>Participación Vecinal, Salud y Sanidad, Desarrollo Social, DEMUNA, OMAPED, CIAM Y Mujer </p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/gestion_ambiental.svg',
            'title' => '<p>SERVICIOS A LA CIUDAD Y GESTION AMBIENTAL</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_ambiental.svg',
            'descripcion' => '<p>Servicios a la Ciudad y Gestión Ambiental</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/seguridad.svg',
            'title' => '<p>SEGURIDAD CIUDADANA, FISCALIZACIÓN Y CONTROL</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_seguridad_ciudadana.svg',
            'descripcion' => '<p>Seguridad Ciudadana, Fiscalización y Control y Transporte</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/sistemas.svg',
            'title' => '<p>TÉCNOLOGIA DE LA INFORMACIÓN Y SISTEMAS</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono_sistemas.svg',
            'descripcion' => '<p>Técnologia de la Información y Sistemas</p>',
            'route' => route('vehiculo.consulta')
        ])

        @include('modulos.layouts.tarjeta', [
            'imagen' => asset('storage') . '/' . 'uploads/modulos/moduloregistrousuario.svg',
            'title' => '<p>USUARIOS</p>',
            'icono' => asset('storage') . '/' . 'uploads/modulos/icono-usuario.svg',
            'descripcion' => '<p>Usuarios</p>',
            'route' => route('auth.lista')
        ])

    </div>



    {{-- /*no poner nada */ --}}
    @vite(['resources/js/modulos/panel.js'])

</body>

</html>
