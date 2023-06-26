<div class="consulta consulta--desactive">
    {{-- <h1>PRUEBA1</h1> --}}

    {{-- <form id="form_search_vehiculo" class="form-modal" method="post" ">
        @csrf
        <div class="form-title-entidad">
            <H2>BUSCAR PLACA</H2>
        </div>
        <div class="field-form-identidad">

            <input type="text" name="placa" id="placa_search" class="form-control" required>
        </div>
        <div class="btn-form-identidad">
            <button type="submit" class="btn btn-primary btn-guardar">Buscar</button>

        </div>

    </form>

    <div>
        <h2 id="valor_vehiculo">

        </h2>
    </div> --}}


    <div class="seccion-buscar">
        <div class="busqueda-vehiculo">
            <form id="form_search_vehiculo" class="" method="post">
                @csrf
                <div class="icon-busqueda"
                    style="background-image: url({{ asset('storage') . '/' . 'uploads/usuarios/lupa-plomo.svg' }});">
                </div>
                <input type="text" name="input-busqueda" id="input-busqueda-placa" class="input-busqueda"
                    placeholder="Buscar..">
            </form>

        </div>
    </div>
    <div id="con_resultados" class="seccion-resultado-vehiculo seccion-resultado-vehiculo--desactive">
        <div class="title-vehicular">
            <h1>Información del vehiculo</h1>
        </div>

        <div class="consulta-vista">


            <div class="campo-tercio">
                <label for="numero_municipal" class="form-label">Número Municipal</label>
                {{-- <input type="number" name="numero_municipal" id="numero_municipal" class="form-control" required> --}}
                <span id="numero_municipal_consulta"></span>
            </div>
            <div class="campo-tercio">
                <label for="empresa" class="form-label">Empresa</label>
                {{-- <input type="text" name="empresa" id="empresa" class="form-control" required> --}}
                <span id="empresa_consulta"> </span>
            </div>

            <div class="campo-tercio">
                <label for="placa" class="form-label">Placa</label>
                {{-- <input type="text" name="placa" id="placa" class="form-control" required> --}}
                <span id="placa_consulta"> </span>
            </div>

            <div class="campo-dos-tercio">
                <label for="propietario" class="form-label">Propietario</label>
                {{-- <input type="text" name="name_propietario" id="name_propietario" class="form-control"
                     required> --}}
                {{-- <input type="text" name="id_propietario" id="id_propietario" class="oculto"> --}}
                <span id="name_propietario_consulta"> </span>

            </div>

{{--
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

            </div> --}}



            <div class="campo-dos-tercio">
                <label for="name_chofer" class="form-label lbl-chofer">Chofer</label>
                {{-- <input type="text" name="name_chofer" id="name_chofer" class="form-control" required> --}}
                {{-- <input type="text" name="id_chofer" id="id_chofer" class="oculto"> --}}
                <span id="name_chofer_consulta"> </span>
            </div>

            {{-- <div class="grupo-btn campo-tercio">
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

            </div> --}}

            <div class="campo-mitad">
                <label for="estado_inspeccion" class="form-label">Estado Inspección</label>
                <span id="estado_inspeccion_consulta"> </span>
                {{-- <select id="estado_inspeccion" class="form-select" name="estado_inspeccion">
                    <option selected value="Aprobado">Aprobado</option>
                    <option value="Denegado">Denegado</option>
                    <option value="Observado">Observado</option>
                    <option value="NN">N.N</option>
                </select> --}}
            </div>

            <div class="campo-mitad">
                <label for="fecha_inspeccion" class="form-label">Fecha Inspección</label>
                {{-- <input type="date" name="fecha_inspeccion" id="fecha_inspeccion" class="form-control" required> --}}
                <span id="fecha_inspeccion_consulta"> </span>
            </div>



            <div class="campo-mitad">
                <label for="estado_credencial" class="form-label">Estado Credencial</label>
                {{-- <select id="estado_credencial" class="form-select" name="estado_credencial">
                    <option selected value="Entregado">Entregado</option>
                    <option value="Ninguno">Ninguno</option>
                    <option value="En proceso">En proceso</option>

                </select> --}}
                <span id="estado_credencial_consulta"> </span>
            </div>

            <div class="campo-mitad">
                <label for="fecha_credencial" class="form-label">Fecha Credencial</label>
                {{-- <input type="date" name="fecha_credencial" id="fecha_credencial" class="form-control" required> --}}
                <span id="fecha_credencial_consulta"> </span>
            </div>

            <div class="campo-mitad">
                <label for="curso_vial" class="form-label">Charla de seguridad vial</label>
                {{-- <select id="curso_vial" class="form-select" name="curso_vial">
                    <option selected value="Asistio">Asistio</option>
                    <option value="No recibio">No recibio</option>
                    <option value="En programacion">En programacion</option>
                </select> --}}
                <span id="curso_vial_consulta"> </span>
            </div>

            <div class="campo-mitad">
                <label for="estado" class="form-label">Estado</label>
                <span id="estado_consulta">estado</span>
                {{-- <select id="estado" class="form-select" name="estado">
                    <option selected value="Habilitado">Habilitado</option>
                    <option value="No Habilitado">No Habilitado</option>
                    <option value="En proceso">En proceso</option>
                </select> --}}
            </div>

        </div>


    </div>
    <div id="sin_resultados" class="vista-sin-resultados vista-sin-resultados--desactive">
        <span>SIN RESULTADOS</span>
    </div>

</div>
