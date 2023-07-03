<div class="registro registro--desactive">
    @extends('templates.modal')

    @section('content-modal')

            <form id="form_entity" class="form-modal" method="post" action="{{ route('entity.register') }}">
                @csrf
                <div class="form-title-entidad">
                    <H2>Registro de Persona</H2>
                </div>

                <div class="field-form-identidad">
                    <label for="nombre_entidad" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre_entidad" class="form-control" required>
                </div>
                <div class="field-form-identidad">
                    <label for="dni_entidad" class="form-label">DNI</label>
                    <input type="number" name="dni" id="dni_entidad" class="form-control" required>
                </div>
                <div class="field-form-identidad">
                    <label for="edad_entidad" class="form-label">Edad</label>
                    <input type="text" name="edad" id="edad_entidad" class="form-control" required>
                </div>
                <div class="field-form-identidad">
                    <label for="sexo_entidad" class="form-label">Sexo</label>
                    <select id="sexo_entidad" class="form-select" name="sexo">
                        <option selected value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="No definido">No definido</option>
                    </select>
                </div>
                <div class="field-form-identidad">
                    <label for="direccion_entidad" class="form-label">Direccion</label>
                    <input type="text" name="direccion" id="direccion_entidad" class="form-control" required>
                </div>

                <div class="field-form-identidad">
                    <label for="celular_emtidad" class="form-label">Celular</label>
                    <input type="text" name="celular" id="celular_emtidad" class="form-control" required>
                </div>
                <div class="btn-form-identidad">
                    <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
                    <div id="btn_cancel_entity" class="btn btn-danger">Cancelar</div>
                </div>

            </form>

            <form id="form_search" class="form-modal" method="post" ">
                @csrf
                <div class="form-title-entidad">
                    <H2>Buscar persona</H2>
                </div>
                <div class="field-form-identidad">
                    <label for="nombre_entidad_buscar" class="form-label">Nombre completo o DNI</label>
                    <input type="text" name="nombre" id="nombre_entidad_buscar" class="form-control" required>
                </div>
                <div class="btn-form-identidad">
                    <button type="submit" class="btn btn-primary btn-guardar">Buscar</button>
                    <div id="btn_cancel_buscar" class="btn btn-danger">Cancelar</div>
                </div>

            </form>

    @endsection



    <div class="container">
        <div class="title-registro-vhicular">
            <h1>Registro vehicular</h1>
        </div>

        <form method="POST" action="{{ route('vehiculos.store') }}">
            @csrf

            <div class="campo-tercio">
                <label for="numero_municipal" class="form-label">Número Municipal</label>
                <input type="number" name="numero_municipal" id="numero_municipal" class="form-control" required>
            </div>
            <div class="campo-tercio">
                <label for="empresa" class="form-label">Empresa</label>
                <input type="text" name="empresa" id="empresa" class="form-control" required>
            </div>

            <div class="campo-tercio">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" id="placa" class="form-control" required>
            </div>

            <div class="campo-dos-tercio">
                <label for="propietario" class="form-label">Propietario</label>
                <input type="text" name="name_propietario" id="name_propietario" class="form-control"
                     required>
                <input type="text" name="id_propietario" id="id_propietario" class="oculto">

            </div>


            <div class="grupo-btn campo-tercio">
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



            <div class="campo-dos-tercio">
                <label for="name_chofer" class="form-label lbl-chofer">Chofer
                    <div class="form-check check-repeat">
                        <input class="form-check-input" type="checkbox" value="" id="check_chofer">
                    </div>
                </label>
                <input type="text" name="name_chofer" id="name_chofer" class="form-control" required>
                <input type="text" name="id_chofer" id="id_chofer" class="oculto">
            </div>

            <div class="grupo-btn campo-tercio">
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

            <div class="campo-mitad">
                <label for="estado_inspeccion" class="form-label">Estado Inspección</label>
                <select id="estado_inspeccion" class="form-select" name="estado_inspeccion">
                    <option selected value="Aprobado">Aprobado</option>
                    <option value="Denegado">Denegado</option>
                    <option value="Observado">Observado</option>
                    <option value="NN">N.N</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="fecha_inspeccion" class="form-label">Fecha Inspección</label>
                <input type="date" name="fecha_inspeccion" id="fecha_inspeccion" class="form-control" required>
            </div>



            <div class="campo-mitad">
                <label for="estado_credencial" class="form-label">Estado Credencial</label>
                <select id="estado_credencial" class="form-select" name="estado_credencial">
                    <option selected value="Entregado">Entregado</option>
                    <option value="Ninguno">Ninguno</option>
                    <option value="En proceso">En proceso</option>

                </select>
            </div>

            <div class="campo-mitad">
                <label for="fecha_credencial" class="form-label">Fecha Credencial</label>
                <input type="date" name="fecha_credencial" id="fecha_credencial" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="curso_vial" class="form-label">Charla de seguridad vial</label>
                <select id="curso_vial" class="form-select" name="curso_vial">
                    <option selected value="Asistio">Asistio</option>
                    <option value="No recibio">No recibio</option>
                    <option value="En programacion">En programacion</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" class="form-select" name="estado">
                    <option selected value="Habilitado">Habilitado</option>
                    <option value="No Habilitado">No Habilitado</option>
                    <option value="En proceso">En proceso</option>
                </select>
            </div>

            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>

        <form method="POST" action="{{ route('vehiculos.store') }}">
            @csrf

            <div class="campo-tercio">
                <label for="numero_municipal" class="form-label">Número Municipal</label>
                <input type="number" name="numero_municipal" id="numero_municipal" class="form-control" required>
            </div>
            <div class="campo-tercio">
                <label for="empresa" class="form-label">Empresa</label>
                <input type="text" name="empresa" id="empresa" class="form-control" required>
            </div>

            <div class="campo-tercio">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" id="placa" class="form-control" required>
            </div>

            <div class="campo-dos-tercio">
                <label for="propietario" class="form-label">Propietario</label>
                <input type="text" name="name_propietario" id="name_propietario" class="form-control"
                     required>
                <input type="text" name="id_propietario" id="id_propietario" class="oculto">

            </div>


            <div class="grupo-btn campo-tercio">
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



            <div class="campo-dos-tercio">
                <label for="name_chofer" class="form-label lbl-chofer">Chofer
                    <div class="form-check check-repeat">
                        <input class="form-check-input" type="checkbox" value="" id="check_chofer">
                    </div>
                </label>
                <input type="text" name="name_chofer" id="name_chofer" class="form-control" required>
                <input type="text" name="id_chofer" id="id_chofer" class="oculto">
            </div>

            <div class="grupo-btn campo-tercio">
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

            <div class="campo-mitad">
                <label for="estado_inspeccion" class="form-label">Estado Inspección</label>
                <select id="estado_inspeccion" class="form-select" name="estado_inspeccion">
                    <option selected value="Aprobado">Aprobado</option>
                    <option value="Denegado">Denegado</option>
                    <option value="Observado">Observado</option>
                    <option value="NN">N.N</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="fecha_inspeccion" class="form-label">Fecha Inspección</label>
                <input type="date" name="fecha_inspeccion" id="fecha_inspeccion" class="form-control" required>
            </div>



            <div class="campo-mitad">
                <label for="estado_credencial" class="form-label">Estado Credencial</label>
                <select id="estado_credencial" class="form-select" name="estado_credencial">
                    <option selected value="Entregado">Entregado</option>
                    <option value="Ninguno">Ninguno</option>
                    <option value="En proceso">En proceso</option>

                </select>
            </div>

            <div class="campo-mitad">
                <label for="fecha_credencial" class="form-label">Fecha Credencial</label>
                <input type="date" name="fecha_credencial" id="fecha_credencial" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="curso_vial" class="form-label">Charla de seguridad vial</label>
                <select id="curso_vial" class="form-select" name="curso_vial">
                    <option selected value="Asistio">Asistio</option>
                    <option value="No recibio">No recibio</option>
                    <option value="En programacion">En programacion</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" class="form-select" name="estado">
                    <option selected value="Habilitado">Habilitado</option>
                    <option value="No Habilitado">No Habilitado</option>
                    <option value="En proceso">En proceso</option>
                </select>
            </div>

            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>


    </div>
</div>
