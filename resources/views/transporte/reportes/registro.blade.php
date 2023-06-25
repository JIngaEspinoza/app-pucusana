<div class="registro registro--desactive">

    <div class="container">
        <div class="title-registro-reporte">
            <h1>Registro de Reporte</h1>
        </div>

        <form method="POST" action="{{ route('vehiculos.store') }}">
            @csrf

            <div class="campo-dos-tercio">
                <label for="inspector" class="form-label">Inspector</label>
                <input type="text" name="inspector" id="inspector" placeholder="Ingrese el nombre del inspector"
                    class="form-control" required>
            </div>

            <div class="campo-tercio">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div>

            <div class="campo-dos-tercio">
                <label for="lugar" class="form-label">Lugar</label>
                <input type="text" name="lugar" id="lugar" placeholder="Ingrese el lugar" class="form-control"
                    required>
            </div>

            <div class="campo-tercio">
                <label for="hora" class="form-label">Hora</label>
                <input type="text" name="hora" id="hora" placeholder="Ingrese la hora" class="form-control"
                    required>

                <div class="grupo-btn">
                    <div class="btn-buscar">
                    </div>
                    <div class="btn-agregar">
                    </div>
                </div>
            </div>

            <div class="campo-mitad">
                <label for="tipo" class="form-label">Tipo</label>
                <select id="tipo" class="form-select">
                    <option selected value="Seleccionar Tipo">Seleccionar Tipo</option>
                    <option value="Operativos Inopinados / Intervención de rutina">Operativos Inopinados / Intervención
                        de rutina</option>
                    <option value="Cierre de Via Temporales">Cierre de Via Temporales</option>
                    <option value="Seguridad Vial">Seguridad Vial</option>
                    <option value="Control Vehicular">Control Vehicular</option>
                </select>
            </div>

            <div class="campo-mitad">
                <label for="subtipo" class="form-label">Subtipo</label>
                <select id="subtipo" class="form-select">
                    <option selected value="Seleccionar el Subtipo">Seleccionar el Subtipo</option>
                    <option value="ATU">ATU</option>
                    <option value="Transporte Publico Informal">Transporte Publico Informal</option>
                    <option value="Paradero Informal">Paradero Informal</option>
                    <option value="Transporte Publico fuera de ruta">Transporte Publico fuera de ruta</option>
                    <option value="Conductor Sin Licencia">Conductor Sin Licencia</option>
                    <option value="Conductor sin SOAT ó SOAT vencido">Conductor sin SOAT ó SOAT vencido</option>
                    <option value="Lunas Polarizadas">Lunas Polarizadas</option>
                    <option value="Sensibilización">Sensibilización</option>
                    <option value="Otro/Digitar">Otro/Digitar</option>
                </select>
            </div>
            
            <div class="campo-max">
                <label for="exampleFormControlTextarea1" class="form-label">Detalles de Informe</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                Por favor ingrese un mensaje en el área de texto.
            </div>
            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>
    </div>
</div>
