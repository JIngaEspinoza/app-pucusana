<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/main-vehiculo-eea70827.css') }}"> --}}
</head>

<body>
    <div class="container">

        <form method="POST" action="{{ route('vehiculos.store') }}">
            @csrf

            <div class="mb-3">
                <label for="empresa" class="form-label">Empresa:</label>
                <input type="text" name="empresa" id="empresa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="placa" class="form-label">Placa:</label>
                <input type="text" name="placa" id="placa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="propietario" class="form-label">Propietario:</label>
                <input type="text" name="name_propietario" id="name_propietario" value="JORGE ZEGARRA VALIENTE" class="form-control" required>
                <input type="text" name="id_propietario" id="id_propietario"  required>
            </div>

            <div class="mb-3">
                <label for="chofer" class="form-label">Chofer:</label>
                <input type="text" name="chofer" id="chofer" class="form-control" required>
                <input type="text" name="id_chofer" id="id_chofer" class="oculto" required>
            </div>

            <div class="mb-3">
                <label for="numero_municipal" class="form-label">Número Municipal:</label>
                <input type="text" name="numero_municipal" id="numero_municipal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estado_inspeccion" class="form-label">Estado Inspección:</label>
                <input type="text" name="estado_inspeccion" id="estado_inspeccion" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fecha_inspeccion" class="form-label">Fecha Inspección:</label>
                <input type="date" name="fecha_inspeccion" id="fecha_inspeccion" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="curso_vial" class="form-label">Curso Vial:</label>
                <input type="text" name="curso_vial" id="curso_vial" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estado_credencial" class="form-label">Estado Credencial:</label>
                <input type="text" name="estado_credencial" id="estado_credencial" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fecha_credencial" class="form-label">Fecha Credencial:</label>
                <input type="date" name="fecha_credencial" id="fecha_credencial" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <input type="text" name="estado" id="estado" class="form-control" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    @vite(['resources/scss/transporte/vehiculo/main-vehiculo.scss'])
</body>

</html>
