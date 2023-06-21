<div class="registro registro--desactive">

    <div class="container">
        <div class="title-registro-vhicular">
            <h1>Registro vehicular</h1>
        </div>

        <form method="POST" action="{{ route('vehiculos.store') }}">
            @csrf

            <div class="campo-tercio">
                <label for="numero_municipal" class="form-label">Número Municipal</label>
                <input type="text" name="numero_municipal" id="numero_municipal" class="form-control" required>
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
                <input type="text" name="name_propietario" id="name_propietario" value="JORGE ZEGARRA VALIENTE" class="form-control" required>
                <input type="text" name="id_propietario" id="id_propietario" class="oculto" >
                <div class="grupo-btn">
                    <div class="btn-buscar">

                    </div>
                    <div class="btn-agregar">

                    </div>
                </div>

            </div>

            <div class="campo-dos-tercio">
                <label for="chofer" class="form-label">Chofer</label>
                <input type="text" name="chofer" id="chofer" class="form-control" required>
                <input type="text" name="id_chofer" id="id_chofer" class="oculto" >
            </div>

            <div class="campo-mitad">
                <label for="estado_inspeccion" class="form-label">Estado Inspección</label>
                <select id="estado_inspeccion" class="form-select">
                    <option selected value="Aprobado">Aprobado</option>
                    <option value="Desaprabado">Desprabado</option>
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
                <select id="estado_credencial" class="form-select">
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
                <select id="curso_vial" class="form-select">
                    <option selected value="Asistio">Asistio</option>
                    <option value="No recibio">No recibio</option>
                    <option value="En programacion">En programacion</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" class="form-select">
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
