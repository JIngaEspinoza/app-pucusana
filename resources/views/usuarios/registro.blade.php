<div id="registro_usuario" class="registro-usuario registro-usuario--desactive">

    <section class="section-registro">


        <form id="form-usuario" class="form-usuario" method="POST" action="{{ route('auth.registro') }} " enctype="multipart/form-data">
            @csrf
            <div class="titulo-registro-usuario">
                <h1>Registro de Usuario</h1>
            </div>
            <div class="imagen-usuario">
                <div class="box-exterior">
                    <div class="box-inferior">
                        <div id="imageContainer" class="content-img imagen-load" style="background-image: url({{ asset('storage') . '/' . 'uploads/usuarios/perfil_2.svg' }});"></div>
                        <input type="file" name="imagen" id="imagen-usuario" accept=".jpg, .jpeg, .png, .svg">
                        <div id="cargar-usuario" class="btn btn-dark button"> Subir imagen</div>
                    </div>
                </div>
            </div>

            <div class="subtitulo-registro-usuario">
                <h2>Informacion Personal</h2>
            </div>
            <div class="campo-estandar">
                <label for="nombres_usuario" class="form-label">Nombres : </label>
                <input type="text" name="nombres" id="nombres_usuario" class="form-control" inputmode="uppercase" required>
            </div>
            <div class="campo-estandar">
                <label for="apellidos_usuario" class="form-label">Apellidos : </label>
                <input type="text" name="apellidos" id="apellidos-usuario" class="form-control" inputmode="uppercase" required>
            </div>

            <div class="campo-estandar">
                <label for="dni_usuario" class="form-label">DNI : </label>
                <input type="number" name="dni" id="dni_usuario" class="form-control" required>
            </div>
            <div class="campo-estandar">
                <label for="edad_usuario" class="form-label">Edad : </label>
                <input type="number" name="edad" id="edad_usuario" class="form-control" required>
            </div>
            <div class="campo-estandar">
                <label for="cumple_usuario" class="form-label">Fecha de cumpleaños : </label>
                <input type="date" name="cumple" id="cumple_usuario" class="form-control" required>
            </div>
            <div class="campo-estandar">
                <label for="sexo_usuario" class="form-label">Sexo : </label>
                <select id="sexo_usuario" class="form-select" name="sexo">
                    <option selected value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="No definido">No definido</option>
                </select>
            </div>
            <div class="campo-estandar">
                <label for="celular_usuario" class="form-label">Numero de celular : </label>
                <input type="number" name="celular" id="celular_usuario" class="form-control" required>
            </div>
            <div class="campo-estandar">
                <label for="direccion_usuario" class="form-label">Direccion : </label>
                <input type="text" name="direccion" id="direccion_usuario" class="form-control" inputmode="uppercase" required>
            </div>
            <div class="campo-estandar">
                <label for="distrito_usuario" class="form-label">Distrito : </label>
                <select id="distrito_usuario" class="form-select" name="distrito">
                    <option selected value="Pucusuna">Pucusana</option>
                </select>
            </div>


            <div class="subtitulo-registro-usuario">
                <h2>Informacion de Acceso</h2>
            </div>
            <div class="campo-estandar campo-estandar--disable">
                <label for="username_usuario" class="form-label">Nombre de usuario : </label>
                <input type="text" name="username" id="username-usuario" class="form-control" required>
                <div id="username-error" class="alert-campo alert-campo--disable" role="alert">
                    <span> El nombre de usuario ya existe.</span>
                </div>
            </div>

            <div class="campo-estandar">
                <label for="email_usuario" class="form-label">Direccion de correo eletronico : </label>
                <input type="text" name="email" id="email-usuario" class="form-control" required>
                <div id="email-error" class="alert-campo alert-campo--disable" role="alert">
                    <span> El correo ya existe.</span>
                </div>
            </div>




            <div class="campo-estandar">
                <label for="rol_usuario" class="form-label">Rol : </label>
                <select id="rol_usuario" class="form-select" name="rol">
                    <option selected value="Usuario estandar">Usuario estandar</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Super administrador">Super administrador</option>
                </select>
            </div>

            <div class="campo-estandar">
                <label for="password_usuario" class="form-label">Contraseña : </label>
                <input type="password" name="password" id="password_usuario" class="form-control" required>
            </div>
            <div class="campo-estandar">
                <label for="password_confirm_usuario" class="form-label">Confirmar Contraseña : </label>
                <input type="password" name="password_confirmation" id="password_confirm_usuario" class="form-control" required>
                <div id="password_error" class="alert-campo alert-campo--disable" role="alert">
                    <span> Las contraseñas no coinciden.</span>
                </div>
            </div>


            <div class="subtitulo-registro-usuario">
                <h2>Informacion Institucional</h2>
            </div>
            <div class="campo-estandar">
                <label for="cargo_usuario" class="form-label">Cargo : </label>
                <select id="cargo_usuario" class="form-select" name="cargo">
                    <option selected value="Inspector Municipal">Inspector Municipal</option>
                    <option value="Jefe de Inspectores Municipal">Jefe de Inspectores Municipal</option>
                    <option value="Secretaria Transporte">Secretaria Transporte</option>
                    <option value="Técnico en Tránsito">Técnico en Tránsito</option>
                    <option value="Sub Gerencia de Transporte">Sub Gerencia de Transporte</option>
                    <option value="Asistente">Asistente</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Apoyo Administrativo">Apoyo Administrativo</option>
                    <option value="Coordinador">Coordinador</option>
                    <option value="Fizcalizador">Fizcalizador</option>
                    <option value="Developer">Developer</option>
                </select>
            </div>
            <div class="campo-estandar campo-area">
                <label for="area_usuario" class="form-label">Area : </label>
                <select id="area_usuario" class="form-select" name="area" multiple>
                    <option selected value="TRANSPORTE">TRANSPORTE</option>
                    <option value="SEGURIDAD CIUDADANA">SEGURIDAD CIUDADANA</option>
                    <option value="GESTIÓN Y RIESGOS DE DESASTRES">GESTIÓN Y RIESGOS DE DESASTRES</option>
                    <option value="FISCALIZACIÓN Y CONTROL">FISCALIZACIÓN Y CONTROL</option>
                    <option value="DESARROLLO ECONÓMICO Y TURISMO">DESARROLLO ECONÓMICO Y TURISMO</option>
                    <option value="SANIDAD Y SALUD">SANIDAD Y SALUD</option>
                    <option value="DESARROLLO SOCIAL, DEMUNA, OMAPED, CIAM">DESARROLLO SOCIAL, DEMUNA, OMAPED, CIAM
                    </option>
                    <option value="CONTABILIDAD">CONTABILIDAD</option>
                    <option value="TEC. DE LA INFORMACIÓN Y SISTEMAS">TEC. DE LA INFORMACIÓN Y SISTEMAS</option>
                    <option value="ADMINISTRACIÓN TRIBUTARIA">ADMINISTRACIÓN TRIBUTARIA</option>
                    <option value="TESORERIA">TESORERIA</option>
                    <option value="FIZCALIZACIÓN">FIZCALIZACIÓN</option>
                    <option value="TRIBUTARIA">TRIBUTARIA</option>
                    <option value="USUARIOS">USUARIOS</option>
                </select>
            </div>
            <div class="campo-buttons">
                <div class="message form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="confirmacion" id="confirmacion">
                    <label for="confirmacion">Confirmo que los datos del usuario ingresados son correctos. </label>
                </div>
                <button class="btn btn-primary button-guardar-usuario" type="submit">Guardar</button>
            </div>
        </form>
    </section>
</div>
