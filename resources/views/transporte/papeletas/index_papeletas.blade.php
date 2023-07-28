<div class="container-papeletas options">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Papeletas',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )

    @include('transporte.papeletas.consulta')
    @include('transporte.papeletas.registro')
</div>
