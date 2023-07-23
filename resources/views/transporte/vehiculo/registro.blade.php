<div class="registro registro--desactive">
    @extends('templates.modal')
    @section('id-modal','modal_general')
    @section('content-modal')
        <form id="form_entity" class="form-modal" method="post" action="{{ route('entity.register') }}">
            @csrf
            <div class="pad-form-entity">
                <div class="subtitulo-registro-entidad">
                    <H2>Registro de Persona</H2>
                </div>

                <div class="campo-estandar">
                    <label for="nombre_entidad" class="form-label">Nombres</label>
                    <input type="text" name="nombres" id="nombre_entidad" class="form-control" required>
                </div>
                <div class="campo-estandar">
                    <label for="apellido_entidad" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" id="apellido_entidad" class="form-control" required>
                </div>

                <div class="campo-estandar">
                    <label for="dni_entidad" class="form-label">DNI</label>
                    <input type="number" name="dni" id="dni_entidad" class="form-control" required>
                </div>
                <div class="group-campos">
                    <div class="campo-estandar quinto">
                        <label for="edad_entidad" class="form-label">Edad</label>
                        <input type="number" name="edad" id="edad_entidad" class="form-control" required>
                    </div>
                    <div class="campo-estandar quinto">
                        <label for="sexo_entidad" class="form-label">Sexo</label>
                        <select id="sexo_entidad" class="form-select" name="sexo">
                            <option selected value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="No definido">No definido</option>
                        </select>
                    </div>
                </div>


                <div class="campo-estandar">
                    <label for="date_entidad" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="dateCumple" id="date_entidad" class="form-control" required>
                </div>
                <div class="campo-estandar">
                    <label for="celular_emtidad" class="form-label">Celular</label>
                    <input type="number" name="celular" id="celular_emtidad" class="form-control" required>
                </div>








                <div class="campo-estandar">
                    <label for="direccion_entidad" class="form-label">Direccion</label>
                    <input type="text" name="direccion" id="direccion_entidad" class="form-control" required>
                </div>
                <div class="campo-estandar">
                    <label for="distrito_entidad" class="form-label">Distrito</label>
                    <input type="text" name="distrito" id="distrito_entidad" class="form-control" required>
                </div>
            </div>


            <div class="footer-form">

                <div id="btn-limpiar" class="clear-form">
                    <div class="icon-clear" style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/vehiculo/eliminar.png' }});"></div>
                    <span>Limpiar</span>
                </div>
                <div class="btn-form">
                    <div id="btn_cancel_entity" class="btn-cancelar"><span>Cancelar</span></div>
                    <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
                </div>
            </div>


        </form>

        <form id="form_search" class="form-modal" method="post" ">
            @csrf
            <div class="pad-form-entity">
                <div class="subtitulo-registro-entidad">
                    <H2>Buscar persona</H2>
                </div>
                <div class="campo-estandar">
                    <label for="nombre_entidad_buscar" class="form-label">Nombre completo o DNI</label>
                    <input type="text" name="nombre" id="nombre_entidad_buscar" class="form-control" required>
                </div>

            </div>
            <div class="footer-form">
                <div id="btn-limpiar-search" class="clear-form">
                    <div class="icon-clear" style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/vehiculo/eliminar.png' }});"></div>
                    <span>Limpiar</span>
                </div>
                <div class="btn-form">
                    <div id="btn_cancel_buscar" class="btn-cancelar"><span>Cancelar</span></div>
                    <button type="submit" class="btn btn-primary btn-guardar">Buscar</button>
                </div>
            </div>
        </form>
@endsection



    <div class="container">
        <div class="title-registro-vhicular">
            <h1>Registro vehicular</h1>
        </div>

        <form id="form-vehiculo" method="POST" action="{{ route('vehiculos.store') }}">
            @csrf
            <div class="subtitulo-registro-vehiculo">
                <h2>Información vehicular</h2>
            </div>
            <div class="campo-estandar">
                <label for="numero_licencia" class="form-label">Número de Licencia</label>
                <input type="number" name="numero_licencia" id="numero_licencia" class="form-control">
            </div>
            <div class="campo-estandar">
                <label for="numero_municipal" class="form-label">Número Municipal</label>
                <input type="number" name="numero_municipal" id="numero_municipal" class="form-control">
            </div>
            <div class="campo-estandar">
                <label for="empresa" class="form-label">Empresa</label>
                <input type="text" name="empresa" id="empresa" class="form-control">
            </div>

            <div class="campo-estandar">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" id="placa" class="form-control" required>
            </div>

            <div class="campo-estandar">
                <label for="propietario" class="form-label">Propietario
                    <div class="grupo-btn">
                        <div class="padding-btn">
                            <div class="btn-option btn-buscar search-propietario">
                                <div class="icon-option "
                                    style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/icono_lupa.svg' }});">
                                </div>
                            </div>
                            <div class="btn-option btn-mass">
                                <div class="icon-option "
                                    style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/icono_mas.svg' }});">
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <input type="text" name="name_propietario" id="name_propietario" class="form-control"
                     required>
                <input type="text" name="id_propietario" id="id_propietario" class="oculto">

            </div>


            <div class="campo-estandar">
                <label for="name_chofer" class="form-label lbl-chofer">
                    <div class="form-check check-repeat">
                        <input class="form-check-input" type="checkbox" value="" id="check_chofer">
                    </div>
                    Chofer
                    <div class="grupo-btn">
                        <div class="padding-btn">
                            <div class="btn-option btn-buscar search-chofer">
                                <div class="icon-option "
                                    style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/icono_lupa.svg' }});">

                                </div>
                            </div>
                            <div class="btn-option btn-mass">
                                <div class="icon-option"
                                    style="background-image: url({{ asset('storage') . '/' . 'uploads/transporte/icono_mas.svg' }});">

                                </div>
                            </div>
                        </div>
                    </div>
                </label>
                <input type="text" name="name_chofer" id="name_chofer" class="form-control" required>
                <input type="text" name="id_chofer" id="id_chofer" class="oculto">
            </div>

            <div class="subtitulo-registro-vehiculo">
                <h2>Información tecnica</h2>
            </div>

            <div class="inspecciones">
                <div class="subtitulo-tecnico">
                    <h3>Inspeccion Vehicular</h3>
                </div>
                <div class="campo-estandar quinto">
                    <label for="numero_inspeccion_vehicular" class="form-label">N°</label>
                    <input type="text" name="numero_inspeccion_vehicular" id="numero_inspeccion_vehicular" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="estado_inspeccion" class="form-label">Estado</label>
                    <select id="estado_inspeccion" class="form-select" name="estado_inspeccion">
                        <option selected value="Vigente">Vigente</option>
                        <option value="Vencido">Vencido</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="campo-estandar tercera">
                    <label for="fecha_inspeccion_emision" class="form-label">Fecha de Emision</label>
                    <input type="date" name="fecha_inspeccion_emision" id="fecha_inspeccion_emision" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="fecha_inspeccion_caducidad" class="form-label">Fecha de Caducidad</label>
                    <input type="date" name="fecha_inspeccion_caducidad" id="fecha_inspeccion_caducidad" class="form-control">
                </div>
            </div>

            <div class="inspecciones">
                <div class="subtitulo-tecnico">
                    <h3>Credencial vehicular</h3>
                </div>
                <div class="campo-estandar quinto">
                    <label for="numero_credencial_vehicular" class="form-label">N°</label>
                    <input type="text" name="numero_credencial_vehicular" id="numero_credencial_vehicular" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="estado_credencial" class="form-label">Estado</label>
                    <select id="estado_credencial" class="form-select" name="estado_credencial">
                        <option selected value="Vigente">Vigente</option>
                        <option value="Vencido">Vencido</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="campo-estandar tercera">
                    <label for="fecha_credencial_emision" class="form-label">Fecha de Emision</label>
                    <input type="date" name="fecha_credencial_emision" id="fecha_credencial_emision" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="fecha_credencial_caducidad" class="form-label">Fecha de Caducidad</label>
                    <input type="date" name="fecha_credencial_caducidad" id="fecha_credencial_caducidad" class="form-control">
                </div>
            </div>

            <div class="inspecciones">
                <div class="subtitulo-tecnico">
                    <h3>Curso Seguridad Vial</h3>
                </div>
                <div class="campo-estandar quinto">
                    <label for="numero_seguridad_vial" class="form-label">N°</label>
                    <input type="text" name="numero_seguridad_vial" id="numero_seguridad_vial" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="estado_seguridad_vial" class="form-label">Estado</label>
                    <select id="estado_seguridad_vial" class="form-select" name="estado_seguridad_vial">
                        <option selected value="Vigente">Vigente</option>
                        <option value="Vencido">Vencido</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="campo-estandar tercera">
                    <label for="fecha_seguridad_vial_emision" class="form-label">Fecha de Emision</label>
                    <input type="date" name="fecha_seguridad_vial_emision" id="fecha_seguridad_vial_emision" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="fecha_seguridad_vial_caducidad" class="form-label">Fecha de Caducidad</label>
                    <input type="date" name="fecha_seguridad_vial_caducidad" id="fecha_seguridad_vial_caducidad" class="form-control">
                </div>
            </div>

            <div class="inspecciones">
                <div class="subtitulo-tecnico">
                    <h3>SOAT</h3>
                </div>
                <div class="campo-estandar quinto">
                    <label for="numero_soat" class="form-label">N°</label>
                    <input type="text" name="numero_soat" id="numero_soat" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="estado_soat" class="form-label">Estado</label>
                    <select id="estado_soat" class="form-select" name="estado_soat">
                        <option selected value="Vigente">Vigente</option>
                        <option value="Vencido">Vencido</option>
                        <option value="Ninguno">Ninguno</option>
                    </select>
                </div>

                <div class="campo-estandar tercera">
                    <label for="fecha_soat_emision" class="form-label">Fecha de Emision</label>
                    <input type="date" name="fecha_soat_emision" id="fecha_soat_emision" class="form-control">
                </div>
                <div class="campo-estandar tercera">
                    <label for="fecha_soat_caducidad" class="form-label">Fecha de Caducidad</label>
                    <input type="date" name="fecha_soat_caducidad" id="fecha_soat_caducidad" class="form-control">
                </div>
            </div>


            <div class="campo-buttons">
                <div class="message form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="confirmacion" id="confirmacion-vehiculo">
                    <label for="confirmacion">Confirmo que los datos del vehiculo ingresados son correctos. </label>
                </div>
                <button class="btn btn-primary button-guardar-vehiculo" type="submit">Registrar</button>
            </div>
        </form>

    </div>
</div>
