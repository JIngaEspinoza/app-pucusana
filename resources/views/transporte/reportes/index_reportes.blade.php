<div class="container-reportes options desactive">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Reportes laborales',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )

    @include('transporte.reportes.consulta')
    @include('transporte.reportes.registro')
</div>
