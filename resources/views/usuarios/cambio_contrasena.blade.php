<div id="contrasena" class="contrasena contrasena--desactive">
    <div class="seccion-password">
        <form id="form-pass" class="form-usuario-pass" method="POST" action="{{ route('auth.pass') }} ">
            <div class="subtitulo-registro-usuario-pass">
                <h2>Cambiar contraseña</h2>
            </div>
            <div class="campo-estandar campo-estandar--disable">
                <label for="username_usuario" class="form-label">Nombre de usuario / Correo electronico  </label>
                <input type="text" name="username" id="username-usuario-pass" class="form-control" required>
                <div id="username-pass-error" class="alert-campo alert-campo--disable" role="alert">
                    <span>El nombre o correo de usuario no esta registrado.</span>
                </div>
            </div>

            <div class="campo-estandar">
                <label for="password_usuario" class="form-label">Contraseña  </label>
                <input type="password" name="password" id="password_usuario-pass" class="form-control"  required>
            </div>
            <div class="campo-estandar">
                <label for="password_confirm_usuario" class="form-label">Confirmar Contraseña  </label>
                <input type="password" name="password_confirmation" id="password_confirm_usuario-pass" class="form-control"  required>
                <div id="password-error-pass" class="alert-campo alert-campo--disable" role="alert">
                    <span> Las contraseñas no coinciden.</span>
                </div>
            </div>
            <div class="campo-buttons">
                <button class="btn btn-primary button-guardar-pass" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
