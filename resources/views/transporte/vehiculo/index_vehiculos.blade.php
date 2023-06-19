<div class="container-vehiculos options desactive">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Consulta vehicular',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )
</div>
