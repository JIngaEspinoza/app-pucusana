<div class="consulta consulta--desactive">
      
    <section class="seccion-vehiculos">
        <div class="title-consulta-vehicular">
            <h1>Lista de vehiculos</h1>
        </div>
        <div class="tabla-vehiculos">
            <div class="padding-table">
                <table id="lista-vehiculos" class="table table-hover ">
                    <thead>
                      <tr>
                        <th scope="col" >Id</th>
                        <th scope="col" style="width: 100px;">Placa</th>
                        <th scope="col">Número Municipal</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Propietario</th>
                        <th scope="col">Conductor</th>
                        <th scope="col" style="width: 100px;">Acciones</th>
                      </tr>
                    </thead>

                  </table>
            </div>

        </div>
    </section>

    {{-- Modal Vehicular edit --}}
    <div id="modal_general_edit" class="modal-template disable-modal">
        <div id="modal_content_edit" class="content-modal">
            <div class="space-cerrar">
                <div id="btn-cerrar-modal_edit" class="btn-cerrar">
                    <div class="btn-img" style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/icono-cancelar.svg' }});"></div>
                </div>    
            </div>
            
            <form id="form_entity_edit" class="form-modal" method="post" >
                @csrf
                
                <div class="pad-form-entity pad-form-entity-send">
                    <div class="subtitulo-registro-entidad">
                        <h2>Información Vehicular</h2>
                    </div>
    
                    <div class="campo-estandar">
                        <label for="txt_propietario" class="form-label">Propietario</label>
                        <input type="text" name="txt_propietario" id="txt_propietario" class="form-control" required>
                        <input type="text" name="txt_id_propietario" id="txt_id_propietario" class="oculto">

                        <input type="text" name="txt_id_vehiculo" id="txt_id_vehiculo" class="oculto">
                        <input type="text" name="txt_id_inspeccion" id="txt_id_inspeccion" class="oculto">
                        <input type="text" name="txt_id_soat" id="txt_id_soat" class="oculto">
                    </div>

                    <div class="campo-estandar">
                        <label for="txt_conductor" class="form-label">Conductor</label>
                        <input type="text" name="txt_conductor" id="txt_conductor" class="form-control" required>
                        <input type="text" name="txt_id_chofer" id="txt_id_chofer" class="oculto">
                    </div>

                    <div class="campo-estandar">
                        <label for="txt_num_municipal" class="form-label">Número Municipal</label>
                        <input type="number" name="txt_num_municipal" id="txt_num_municipal" class="form-control" required>
                    </div>

                    <div class="campo-estandar">
                        <label for="txt_placa" class="form-label">Placa</label>
                        <input type="text" name="txt_placa" id="txt_placa" class="form-control" required>
                    </div>

                    <div class="campo-estandar form-group" style="width: 85%">
                        <label for="txt_empresa" class="form-label">Empresa</label>
                        <input type="text" name="txt_empresa" id="txt_empresa" class="form-control" required>
                    </div>

                    <div class="subtitulo-registro-entidad">
                        <h2>Inspeccion Vehicular</h2>
                    </div>

                    <div class="campo-estandar ">
                        <label for="txt_nro_inspeccion" class="form-label">N° de Inspección</label>
                        <input type="text" name="txt_nro_inspeccion" id="txt_nro_inspeccion" class="form-control">
                    </div>
                    <div class="campo-estandar ">
                        <label for="cbo_estado_inspeccion" class="form-label">Estado</label>
                        <select id="cbo_estado_inspeccion" class="form-select" name="cbo_estado_inspeccion">
                            <option selected value="Vigente">Vigente</option>
                            <option value="Vencido">Vencido</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>
    
                    <div class="campo-estandar ">
                        <label for="txt_fecha_emision_inspeccion" class="form-label">Fecha de Emision</label>
                        <input type="date" name="txt_fecha_emision_inspeccion" id="txt_fecha_emision_inspeccion" class="form-control">
                    </div>
                    <div class="campo-estandar ">
                        <label for="txt_fecha_caducidad_inspeccion" class="form-label">Fecha de Caducidad</label>
                        <input type="date" name="txt_fecha_caducidad_inspeccion" id="txt_fecha_caducidad_inspeccion" class="form-control">
                    </div>

                    <div class="subtitulo-registro-entidad">
                        <h2>SOAT</h2>
                    </div>

                    <div class="campo-estandar ">
                        <label for="txt_nro_soat" class="form-label">N° de SOAT</label>
                        <input type="text" name="txt_nro_soat" id="txt_nro_soat" class="form-control">
                    </div>
                    <div class="campo-estandar">
                        <label for="cbo_estado_soat" class="form-label">Estado</label>
                        <select id="cbo_estado_soat" class="form-select" name="cbo_estado_soat">
                            <option selected value="Vigente">Vigente</option>
                            <option value="Vencido">Vencido</option>
                            <option value="Ninguno">Ninguno</option>
                        </select>
                    </div>
    
                    <div class="campo-estandar">
                        <label for="txt_fecha_emision_soat" class="form-label">Fecha de Emision</label>
                        <input type="date" name="txt_fecha_emision_soat" id="txt_fecha_emision_soat" class="form-control">
                    </div>
                    <div class="campo-estandar">
                        <label for="txt_fecha_caducidad_soat" class="form-label">Fecha de Caducidad</label>
                        <input type="date" name="txt_fecha_caducidad_soat" id="txt_fecha_caducidad_soat" class="form-control">
                    </div>
        
                </div>

                <div class="footer-form">
                    <div class="btn-form">
                        <div id="btn_cancel_entity_edit" class="btn-cancelar"><span>Cancelar</span></div>
                        <button class="btn btn-primary btn-guardar">Guardar</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
  
    <script>
        let icono_ojo_visor_url = "{{ asset('storage') . '/' . 'uploads/transporte/icono_lupa.svg' }}";
        let icono_mas_url = "{{ asset('storage') . '/' . 'uploads/transporte/icono-editar.svg' }}";
        let icono_eliminar_url = "{{ asset('storage') . '/' . 'uploads/transporte/icono-eliminar.svg' }}";
    </script>

    <script>

        const deleteVehiculo = (id) => {

            Swal.fire({
                title: "¿Estas seguro?",
                text: "Después de anular, no podrá recuperar este registro",
                type: "warning",
                showCancelButton: true,
                // confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Si, estoy seguro!',
                cancelButtonText: "No, cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then((result) => {
                if (result['isConfirmed']) {
                    fetch(`/eliminar-vehiculo/${id}`, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                    })
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data)

                        if (data){
                            const { title, text } = data;
                            Swal.fire({
                                title: data.title,
                                text: data.text,
                                icon: 'success',
                                timer: 3000,
                                returnFocus: false
                            }).then(() => {
                                location.reload();
                            });
                        }
                    })
                }
            });
            
            

        }

        
        const editVehiculo = (id) => {
            const modalGeneral = document.getElementById('modal_general_edit');
            const modalContentEdit = document.getElementById('modal_content_edit');
            const formEntityEdit = document.getElementById('form_entity_edit');
            // formEntityEdit.classList.remove('content-modal__form--disable')

            modalContentEdit.classList.add('content-modal__form'); 
            modalGeneral.classList.remove('disable-modal');

            fetch(`/editar-vehiculo/${id}`, {
                method: 'GET',
                headers: {
                    Accept: 'application/json',
                }
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data)
                    document.getElementById('txt_id_vehiculo').value = id,
                    document.getElementById('txt_id_inspeccion').value = data[0].ID_INSPECCION,
                    document.getElementById('txt_id_soat').value = data[0].ID_SOAT,
                    document.getElementById('txt_placa').value = data[0].PLACA
                    document.getElementById('txt_num_municipal').value = data[0].NUMERO_MUNICIPAL
                    document.getElementById('txt_empresa').value = data[0].EMPRESA
                    document.getElementById('txt_nro_inspeccion').value = data[0].NUMERO_INSPECCION
                    document.getElementById('cbo_estado_inspeccion').value = data[0].ESTADO_INSPECCION
                    document.getElementById('cbo_estado_soat').value = data[0].ESTADO_SOAT
                    document.getElementById('txt_nro_soat').value = data[0].NUMERO_SOAT
                    document.getElementById('txt_propietario').value = data[0].NOMBRES_PROPIETARIO
                    document.getElementById('txt_conductor').value = data[0].NOMBRES_CHOFER
                    document.getElementById('txt_id_propietario').value = data[0].ID_PROPIETARIO
                    document.getElementById('txt_id_chofer').value = data[0].ID_CHOFER
                    document.getElementById('txt_fecha_emision_inspeccion').value = data[0].FECHA_EMI_INSPECCION
                    document.getElementById('txt_fecha_caducidad_inspeccion').value = data[0].FECHA_CAD_INSPECCION
                    document.getElementById('txt_fecha_emision_soat').value = data[0].FECHA_EMI_SOAT
                    document.getElementById('txt_fecha_caducidad_soat').value = data[0].FECHA_CAD_SOAT
                })
        }

        const formVehiculo = document.getElementById('form_entity_edit');
        formVehiculo.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(formVehiculo);
            const vehiculo = Object.fromEntries(formData);

            fetch(`/actualizar-vehiculo`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(vehiculo)
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data)

                if (data){
                    const { title, text } = data;
                    Swal.fire({
                        title: data.title,
                        text: data.text,
                        icon: 'success',
                        timer: 3000,
                        returnFocus: false
                    }).then(() => {
                        location.reload();
                    });
                }

            })
        })

        const modalContent = document.getElementById('modal_content_edit');
        const formEntityEdit = document.getElementById('form_entity_edit');
        const modalGeneral = document.getElementById('modal_general_edit');
        const btnCancelEntityEdit = document.getElementById('btn_cancel_entity_edit');
        btnCancelEntityEdit.addEventListener('click', () => {
            console.log('click cancel')

            // formEntityEdit.classList.remove('content-modal__form--disable') 
            // modalContent.classList.add('content-modal__form');
            modalGeneral.classList.add('disable-modal');
            formEntityEdit.reset();
        });

        const setEmpresaEdit =(numeroMunicipal) =>{
            const empresas =[
                { nombre:'AMTUP', min:1, max:100 },
                { nombre:'ATOMI', min:101, max:200 },
                { nombre:'PUCUSANA EXPRESS', min:201, max:300},
                { nombre:'BOCANA', min:301, max:400},
                { nombre:'SAN JERONIMO', min:501, max:551},
                { nombre:'NUEVA VIDA', min:601, max:650},
                { nombre:'AMIGOS GEMINIS', min:701, max:752},
                { nombre:'RAYOS DEL SUR', min:801, max:850},
                { nombre:'LOS METEORITOS', min:901, max:950}
            ]

            const valor = parseInt(numeroMunicipal)

            for (let i = 0; i < empresas.length; i++) {
                const empresa = empresas[i];

                console.log("valor:",valor)
                console.log("empresa:",empresa)
                if(empresa.min <= valor && valor <= empresa.max) {
                    return empresa.nombre;
                }
            }
            return null;
        }

        const setNumeroMunicipalEdit = () => {
            const numeroMunicipal = document.getElementById('txt_num_municipal');
            const empresaNombre = document.getElementById('txt_empresa');
            numeroMunicipal.addEventListener('keyup', () => {

                let alerts = false;
                const empresaEncontrada = setEmpresaEdit(numeroMunicipal.value, empresaNombre);
                if (empresaEncontrada) {
                    empresaNombre.value = empresaEncontrada
                } else {
                    if (numeroMunicipal.value.length != 0) {
                        alert("Numero no reconocido")
                        // alert = true;
                    }
                }
                if (numeroMunicipal.value.length == 0) {
                    empresaNombre.value = '';
                }

            })
        }
        
        setNumeroMunicipalEdit()

    </script>
</div>
