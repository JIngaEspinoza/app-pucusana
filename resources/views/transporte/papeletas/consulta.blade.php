<div class="consulta consulta--desactive">


    <div class="container">
        <div class="title-consulta-papeletas">
            <h1>Consulta de Papeletas</h1>
        </div>

        <form method="POST" action="{{ route('vehiculos.store') }}">
            @csrf

            <div class="campo-max">
                <label for="apellidos_nombres" class="form-label">Apellidos y Nombres:</label>
                <input type="text" name="apellidos_nombres" id="apellidos_nombres" class="form-control" required>
            </div>

            <div class="campo-max">
                <label for="direccion_domicilio" class="form-label">Dirección Domiciliaria:</label>
                <input type="text" name="direccion_domicilio" id="direccion_domicilio" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="tipo_documento" class="form-label">Tipo Documento:</label>
                <input type="tipo_documento" name="tipo_documento" id="tipo_documento" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="dni" class="form-label">Nro. de Documento:</label>
                <input type="text" name="dni" id="dni" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="placa_rodaje" class="form-label">Placa de Rodaje:</label>
                <input type="text" name="placa_rodaje" id="placa_rodaje" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="infraccion" class="form-label">Infracción:</label>
                <input type="infraccion" name="infraccion" id="infraccion" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="numero_papeleta" class="form-label">N° De Papeleta: (mostrar 🧿PDF)</label>
                <input type="text" name="numero_papeleta" id="numero_papeleta" class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="orden_liberacion" class="form-label">N° Orden de Liberación Vehicular:(🧿mostrar PDF)</label>
                <input type="orden_liberacion" name="orden_liberacion" id="orden_liberacion" class="form-control" required>
            </div>

            <div class="campo-dos-tercio">
                <label for="nombre_inspector" class="form-label">Nombre Completo de Inspector(segun su usuario)</label>
                <input type="nombre_inspector" name="nombre_inspector" id="nombre_inspector" class="form-control" required>
            </div>

            <div class="campo-tercio">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>

            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>

    </div>
</div>
