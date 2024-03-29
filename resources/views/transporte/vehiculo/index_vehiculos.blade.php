<div class="container-vehiculos options">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Consulta vehicular',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )

    @include('transporte.vehiculo.consulta')
    @include('transporte.vehiculo.registro')
    @vite(['resources/js/transporte/vehiculo.js'])
</div>
