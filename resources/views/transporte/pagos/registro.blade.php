<div class="registro registro--desactive">

    <div class="container">
        <div class="title-registro-papeletas">
            <h1>Registro de Papeletas</h1>
        </div>

        <form id="form-papeleta" method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="campo-max">
                <label for="infraccion" class="form-label">Offender:</label>
                <select name="id_entidad" id="offenderSelect" class="form-select" required>
                    <option value="" disabled selected>Selecciona una infractor</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="placa_rodaje" class="form-label">Placa de Rodaje:</label>
                <input type="text" name="placa" id="placa" placeholder="Ingrese el número de placa"
                    class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="fecha" class="form-label">Fecha:</label>
                <input type="date" name="fecha" id="fecha" placeholder="Ingrese la fecha" class="form-control" required>
            </div>

            
            <div class="campo-mitad">
                <label for="observacion" class="form-label">Placa de Rodaje:</label>
                <textarea name="observacion" id="observacion" cols="30" rows="5" class="form-control" required></textarea>
            </div>

            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>

    </div>
</div>
