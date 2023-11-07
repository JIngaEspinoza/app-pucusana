<div class="registro registro--desactive">

    <div class="container">
        <div class="title-registro-papeletas">
            <h1>Registro de Papeletas</h1>
        </div>

        <form id="form-papeleta" method="POST" action="{{ route('tickets.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="campo-max">
                <label for="id_offender" class="form-label">Offender:</label>
                <select name="id_offender" id="offenderSelect" class="form-select" required>
                    <option value="" disabled selected>Selecciona una infractor</option>
                </select>
            </div>

            <div class="campo-max">
                <label for="direccion_domicilio" class="form-label">Dirección Domiciliaria:</label>
                <input type="text" name="direccion" id="direccion" placeholder="Ingrese su dirección completa"
                    class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="placa_rodaje" class="form-label">Placa de Rodaje:</label>
                <input type="text" name="placa" id="placa" placeholder="Ingrese el número de placa"
                    class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="infraccion" class="form-label">Infracción:</label>
                <select name="id_infraction" id="infractionSelect" class="form-select" required>
                    <option value="" disabled selected>Selecciona una infracción</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="numero_papeleta" class="form-label">N° De Papeleta:</label>
                <input type="text" name="nro_papeleta" id="nro_papeleta" class="form-control"
                    placeholder="Ingresa el N° De Papeleta" required>
            </div>

            <div class="campo-mitad">
                <label for="img_papeleta" class="form-label">img_papeleta:</label>
                <input type="file" name="img_papeleta" id="img_papeleta" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="ord_liberacion_vehicular" class="form-label">N° Orden de Liberación Vehicular:</label>
                <input type="text" name="ord_liberacion_vehicular" id="ord_liberacion_vehicular" class="form-control"
                    placeholder="Ingresa el N° Orden de Liberación Vehicular" required>
            </div>

            <div class="campo-mitad">
                <label for="img_liberacion_vehicular" class="form-label">Orden de Liberación Vehicular:</label>
                <input type="file" name="img_liberacion_vehicular" id="img_liberacion_vehicular" class="form-control"
                    required>
            </div>


            <div class="campo-mitad">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>
            <div class="campo-dos-tercio">
                <input type="hidden" name="nombre_inspector" value="{{ auth()->user()->id }}">
            </div>



            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>

    </div>
</div>
