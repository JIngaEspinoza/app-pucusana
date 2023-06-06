<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="login">
        <div class="body">
            <div class="portada">
                <div class="img" style="background-image: url(portada.jpg);"></div>
            </div>
            <div class="space">
                <div class="space__form">
                    <img src="">
                    <h1>Iniciar Sesion</h1>
                    <span >Inicie sesión para continuar en nuestro sitio web</span>

                    <form method="POST" action="{{ route('login') }}" class="mt-4">
                        @csrf

                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                                name="email">
                            <label for="floatingInput">Correo o nombre de usuario</label>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password">
                            <label for="floatingPassword">Contraseña</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-4">Iniciar Sesion</button>

                    </form>

                </div>
                <div class="space__informacion"></div>
            </div>
        </div>

    </section>


    @vite(['resources/scss/user/main-user.scss'])
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
