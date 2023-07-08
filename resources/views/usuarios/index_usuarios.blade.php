<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @vite(['resources/scss/usuarios/main-usuarios.scss'])
    <div class="fondo">
        <div class="cuerpo">
            <div class="barra">

                {{-- <div class="busqueda-usuario">
                    <div class="icon-busqueda" style="background-image: url({{ asset('storage') . '/' . 'uploads/usuarios/lupa-plomo.svg' }});"></div>
                    <input type="text" name="input_busqueda" id="input_busqueda" class="input-busqueda" placeholder="Buscar..">
                </div> --}}
                <div class="opciones">



                    <div class="card-usuario">
                        <div class="foto">
                            <div class="foto__url"
                                style="background-image: url({{ asset('storage') . '/' . $imagen }});">
                            </div>
                        </div>
                        <div class="info">
                            <div class="nombre">
                                <span>{{$username}}</span>
                            </div>
                            <div class="rol">
                                <span>{{$cargo}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="screen">
                        <div class="screen__url"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/screen.svg' }});">
                        </div>
                    </div>

                    <a href="{{route('modulos')}}" class="luna">
                        <div class="luna__url"
                            style="background-image: url({{ asset('storage') . '/' . 'uploads/navegacion/icono_modulos.svg' }});">
                        </div>
                    </a>
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


                @include('usuarios.lista')
                @include('usuarios.registro')
                @include('usuarios.cambio_contrasena')


            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/js/usuarios/usuarios.js'])
</body>

</html>
