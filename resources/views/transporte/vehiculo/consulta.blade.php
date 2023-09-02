<div class="consulta consulta--desactive">

    <section class="seccion-vehiculos">
        <div class="title-consulta-vehicular">
            <h1>Lista de vehiculos</h1>
        </div>
        <div class="tabla-vehiculos">
            <div class="padding-table">
                <table id="lista-vehiculos" class="table table-hover nowarp">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 100px;">Placa</th>
                        <th scope="col">Número Municipal</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Chofer</th>
                        <th scope="col" style="width: 100px;">Acciones</th>
                      </tr>
                    </thead>

                  </table>
            </div>

        </div>
    </section>
    <script>
        let icono_ojo_visor_url = "{{ asset('storage') . '/' . 'uploads/transporte/icono_lupa.svg' }}";
        let icono_mas_url = "{{ asset('storage') . '/' . 'uploads/transporte/icono_mas.svg' }}";
        let icono_eliminar_url = "{{ asset('storage') . '/' . 'uploads/transporte/icono-cancel.svg' }}";
    </script>
</div>
