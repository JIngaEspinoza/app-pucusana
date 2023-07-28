<div class="container-pagos options">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Orden de Pago',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )

    @include('transporte.pagos.consulta')
    @include('transporte.pagos.registro')
</div>
