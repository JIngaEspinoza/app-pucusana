<div class="registro registro--desactive">

    <div class="container">
        <div class="title-registro-reporte">
            <h1>Registro de incidencias</h1>
        </div>

        <form id="form-incidence" method="POST" >
            @csrf

            <div class="campo-dos-tercio">
                <label for="inspector" class="form-label">Inspector</label>
                <input type="text" name="inspector" id="inspector" placeholder="Ingrese el nombre del inspector" value="{{ $username }}"
                    class="form-control" required disabled>
            </div>

            <div class="campo-tercio">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" id="fecha" 
                min="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                max="{{Carbon\Carbon::now()->format('Y-m-d')}}"
                class="form-control" value="{{ old('fecha',Carbon\Carbon::now()->format('Y-m-d')) }}">
            </div>

            <div class="campo-dos-tercio" style="width: 100%">
                <label for="lugar" class="form-label">Lugar</label>
                <input type="text" name="lugar" id="lugar" placeholder="Ingrese el lugar" class="form-control" 
                    required>
            </div>

            {{-- <div class="campo-tercio">
                <label for="hora" class="form-label">Hora</label>
                <input type="text" name="hora" id="hora" placeholder="Ingrese la hora" class="form-control"
                    required>

                <div class="grupo-btn">
                    <div class="btn-buscar">
                    </div>
                    <div class="btn-agregar">
                    </div>
                </div>
            </div> --}}

            <div class="campo-mitad">
                <label for="tipo" class="form-label">Tipo</label>
                <select id="tipo" name="tipo" class="form-select">
                    <option selected value="Seleccionar Tipo">Seleccionar Tipo</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="subtipo" class="form-label">Subtipo</label>
                <select id="subtipo" name="subtipo" class="form-select">
                    <option selected value="Seleccionar el Subtipo">Seleccionar el Subtipo</option>
                </select>
            </div>
            
            <div class="campo-max">
                <label for="obs" class="form-label">Detalles de Informe</label>
                <textarea class="form-control" id="obs" name="obs" rows="5"></textarea>
                Por favor ingrese un mensaje en el área de texto.
            </div>
            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>
    </div>
</div>
