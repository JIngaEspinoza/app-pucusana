<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>

<body>
    @vite(['resources/scss/usuarios/main-usuarios.scss'])
    <div class="fondo">
        <div class="cuerpo">
            <div class="barra">

                <div class="busqueda-usuario">
                    <div class="icon-busqueda" style="background-image: url({{ asset('storage') . '/' . 'uploads/usuarios/lupa-plomo.svg' }});"></div>
                    <input type="text" name="input_busqueda" id="input_busqueda" class="input-busqueda" placeholder="Buscar..">
                </div>
                <div class="opciones">
                    <div class="luna">
                        <div class="luna__url"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/luna.svg' }});">
                        </div>
                    </div>
                    <div class="screen">
                        <div class="screen__url"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/screen.svg' }});">
                        </div>
                    </div>

                    <div class="card-usuario">
                        <div class="foto">
                            <div class="foto__url"
                                style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/fotouser.jpeg' }});">
                            </div>
                        </div>
                        <div class="info">
                            <div class="nombre">
                                <span>Hilton Bill</span>
                            </div>
                            <div class="rol">
                                <span>Super Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-usuario">
                <div class="nav-secundario">
                    <div class="opciones">
                        <span class="opcion opcion--active">Lista de usuarios</span>
                        <span class="opcion">Registro</span>
                        <span class="opcion">Contraseña</span>
                    </div>
                    <div class="ruta">
                        <span class="nombre">Usuarios</span>
                        <span class="flecha">></span>
                        <span id="rutaAccion" class="nombre nombre--active">{{$accion}}</span>
                    </div>
                </div>

                <div id="lista" class="lista lista--desactive">
                    <h1>Lista de usuarios</h1>
                </div>
                <div id="registro_usuario" class="registro-usuario registro-usuario--desactive">
                    <h1>registro</h1>
                </div>
                <div id="contrasena" class="contrasena contrasena--desactive">
                    <h1>contrasena</h1>
                </div>
            </div>

        </div>
    </div>

    @vite(['resources/js/usuarios/usuarios.js'])
</body>

</html>
