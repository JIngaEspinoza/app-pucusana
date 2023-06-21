<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="registro registro--desactive">
        <h1>Registro</h1>
        <body>
            <section class="container">
                <header>Registro</header>
                <cajon action="#" class="form">
                    <div class="input-box">
                        <label>Empresa ó Asociación</label>
                        <input type="text" placeholder="Ingresel nombre completo de la empresa" required />
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Estado de Inspección</label>
                            <input type="text" placeholder="Aprobado, Desaprobado, observacion" required />
                        </div>
                        <div class="input-box">
                            <label>Fecha</label>
                            <input type="date" placeholder="Enter birth date" required />
                        </div>
                    </div>
                    <div class="input-box address">
                        <div class="column">
                            <div class="select-box">
                                <select>
                                    <option hidden>Country</option>
                                    <option>Aprobado</option>
                                    <option>Denegado</option>
                                    <option>En Proceso</option>
                                    <option>Observado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btnregistrar">
                        <btn>Registrar</btn>
                    </div>

                </cajon>
            </section>
    </div>
</body>

</html>
