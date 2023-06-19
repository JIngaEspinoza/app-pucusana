<div class="container-pagos options desactive">
    @include('templates.nav_secundario',
        [
            'modulo'=>'Transporte',
            'seccion'=>'Orden de Pago',
            'accion'=>$accion,
            'opciones'=>'<span class="opcion opcion--active">Consulta</span><span class="opcion">Registro</span>'
        ]
    )
</div>
