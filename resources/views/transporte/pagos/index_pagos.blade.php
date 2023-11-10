<div class="container-pagos options">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Pagos',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )

    @include('transporte.pagos.consulta')
    @include('transporte.pagos.registro')
    @vite(['resources/js/transporte/pagos.js'])
</div>
