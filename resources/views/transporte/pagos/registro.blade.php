<div class="registro registro--desactive">
    <div class="container">
        <div class="title-registro-pagos">
            <h1>Registro de Orden de Pago</h1>

            <button type="button" class="btn btn-primary btn-guardar" onclick="addFormSection()">Agregar Formulario</button>
        </div>

        <form id="form-pagos" method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="campo-max">
                <label for="infraccion" class="form-label">Servicio:</label>
                <select name="id_service" id="serviceSelect" class="form-select" required>
                    <option value="" disabled selected>Selecciona un Servicio</option>
                </select>
            </div>
            
            <div class="campo-mitad">
                <label for="importe" class="form-label">Importe:</label>
                <input type="text" name="importe" id="importeInput" placeholder="Ingrese el importe"
                    class="form-control" required>
            </div>

            <div class="campo-mitad">
                <label for="descuento" class="form-label">Importe con Descuento:</label>
                <input type="text" name="descuento" id="descuentoInput" placeholder="Ingrse el descuento"
                    class="form-control">
            </div>

            <div class="campo-max">
                <label for="infraccion" class="form-label">Persona:</label>
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
                <label for="observacion" class="form-label">Observación:</label>
                <textarea name="observacion" id="observacion" cols="30" rows="5" class="form-control" required></textarea>
            </div>

            <div id="dynamic-form-section">
                <!-- Dynamic form sections will be appended here -->
            </div>

            <div class="div-btn-guardar">
                <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
            </div>
        </form>

    </div>
</div>

<script>
    var formCount = 1;

    function addFormSection() {
        if (formCount < 3) {
            // Remove existing cloned sections
            var existingClones = document.querySelectorAll('.cloned-section');
            existingClones.forEach(function(clone) {
                document.getElementById('dynamic-form-section').removeChild(clone);
            });

            // Clone the entire form section
            var clonedSection = document.querySelector('form[name="form-pagos"]').cloneNode(true);
            clonedSection.classList.add('cloned-section'); // Add a class to identify cloned sections

            // Clear the values in the cloned section
            clonedSection.querySelectorAll('input, select, textarea').forEach(function(element) {
                element.value = '';
            });

            // Remove the submit button from the cloned section
            clonedSection.querySelector('.div-btn-guardar').removeChild(clonedSection.querySelector('[type=submit]'));

            // Append the cloned section to the dynamic-form-section div
            document.getElementById('dynamic-form-section').appendChild(clonedSection);

            formCount++;
        } else {
            alert("You can add up to 3 additional forms.");
        }
    }
</script>