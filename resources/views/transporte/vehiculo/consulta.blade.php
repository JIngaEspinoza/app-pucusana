<div class="consulta consulta--desactive">
    {{-- <h1>PRUEBA1</h1> --}}

    <form id="form_search_vehiculo" class="form-modal" method="post" ">
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
    </div>

</div>


