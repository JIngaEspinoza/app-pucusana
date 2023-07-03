import axios from "axios";
const check = {
    pass: false,
    username: false,
    email: false,
}

let areas = ['TRANSPORTE'];


const mainUser = () => {
    register();
    password();
}
const register = () => {
    try {
        const cumpleInput = document.getElementById('cumple_usuario');
        cumpleInput.value = '2000-01-01';
        cargarDistritos();
        changeAction();
        setImage();
        seleccionarUnClick();
        setUsername();
        verificarPass();
        validateUsername();
        validateEmail();
        enviarForm();

        defaultDevs();

    } catch (error) {
        console.log(error);
    }
}
const password = () => {
    validateEmailOrUsername();
    verificarPassword();
    sendFormPass();
}
const changeAction = () => {
    //cambio el bloque segun el subnavegador


    const container = document.querySelector('.container-usuario');
    const optionsMenu = container.querySelectorAll('.opcion');
    const rutaAccion = container.querySelector('#rutaAccion');
    const lista = container.querySelector('.lista');
    const registro = container.querySelector('.registro-usuario');
    const pass = container.querySelector('.contrasena');
    optionsMenu.forEach(option => {
        option.addEventListener('click', () => {
            optionsMenu.forEach(option => {
                option.classList.remove('opcion--active');
            });
            option.classList.add('opcion--active');
            rutaAccion.textContent = option.textContent;

            // document.title = item.title
            const title = 'Usuarios'
            if (option.textContent === 'Lista de usuarios') {
                history.pushState(null, title, '/usuarios/lista-de-usuarios');
                registro.classList.add('registro-usuario--desactive');
                pass.classList.add('contrasena--desactive');
                lista.classList.remove('lista--desactive');
            }
            if (option.textContent === 'Registro') {
                history.pushState(null, title, '/usuarios/registro');
                lista.classList.add('lista--desactive');
                pass.classList.add('contrasena--desactive');
                registro.classList.remove('registro-usuario--desactive');
            }
            if (option.textContent === 'Contraseña') {
                history.pushState(null, title, '/usuarios/contrasena');
                registro.classList.add('registro-usuario--desactive');
                lista.classList.add('lista--desactive');
                pass.classList.remove('contrasena--desactive');
            }

        })


    });

    if (rutaAccion.textContent === 'Lista de usuarios') {

        registro.classList.add('registro-usuario--desactive');
        pass.classList.add('contrasena--desactive');
        lista.classList.remove('lista--desactive');
    }
    if (rutaAccion.textContent === 'Registro') {

        lista.classList.add('lista--desactive');
        pass.classList.add('contrasena--desactive');
        registro.classList.remove('registro-usuario--desactive');
    }
    if (rutaAccion.textContent === 'Contraseña') {

        registro.classList.add('registro-usuario--desactive');
        lista.classList.add('lista--desactive');
        pass.classList.remove('contrasena--desactive');
    }



    //Resaltado de las opciones del subnavegador cuando recarga la pagina
    for (let i = 0; i < optionsMenu.length; i++) {
        const option = optionsMenu[i];
        optionsMenu.forEach(option => {
            option.classList.remove('opcion--active');
        });
        if (option.textContent === rutaAccion.textContent) {
            option.classList.add('opcion--active');
            break;
        }
    }

}

const setImage = () => {
    const fileInput = document.getElementById('imagen-usuario');
    const uploadButton = document.getElementById('cargar-usuario');
    const imageContainer = document.getElementById('imageContainer');

    uploadButton.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        // Acceder al archivo seleccionado
        const file = fileInput.files[0];
        console.log("File :", file);
        // Crear una URL temporal para la imagen seleccionada
        const imageUrl = URL.createObjectURL(file);

        // Establecer la imagen como fondo del div
        imageContainer.style.backgroundImage = `url(${imageUrl})`;
        imageContainer.style.backgroundSize = 'cover';
        imageContainer.style.backgroundPosition = 'center';
    });
}

const cargarDistritos = () => {

    const distritoSur = [
        "Lurín",
        "Pachacamac",
        "Punta Hermosa",
        "Punta Negra",
        "San Bartolo",
        "San Juan de Miraflores",
        "Santa María del Mar",
        "Villa El Salvador",
        "Villa María del Triunfo"
    ];
    const distritosDeLima = [

        "Ancón",
        "Carabayllo",
        "Comas",
        "Independencia",
        "Los Olivos",
        "Puente Piedra",
        "San Martín de Porres",
        "Santa Rosa",
        "Barranco",
        "Breña",
        "Jesús María",
        "La Victoria",
        "Lima",
        "Lince",
        "Magdalena del Mar",
        "Miraflores",
        "Pueblo Libre",
        "Rímac",
        "San Borja",
        "San Isidro",
        "San Miguel",
        "Santiago de Surco",
        "Surquillo",
        "Ate",
        "Chaclacayo",
        "Cieneguilla",
        "El Agustino",
        "Huaycán (Comunidad)",
        "La Molina",
        "Lurigancho",
        "San Juan de Lurigancho",
        "San Luis",
        "Santa Anita",
        "Chorrillos"
    ];

    const distritosDeIca = [
        "Ica",
        "La Tinguiña",
        "Los Aquijes",
        "Ocucaje",
        "Pachacútec",
        "Parcona",
        "Pueblo Nuevo",
        "Salas",
        "San José de los Molinos",
        "San Juan Bautista",
        "Santiago",
        "Subtanjalla",
        "Tate",
        "Yauca del Rosario"
    ];

    const distritosConsiderados = distritoSur.concat(distritosDeIca, distritosDeLima);
    const selectElement = document.getElementById('distrito_usuario');

    distritosConsiderados.forEach((distrito) => {
        const option = document.createElement("option");
        option.text = distrito;
        option.value = distrito;
        selectElement.add(option);
    });

}

const seleccionarUnClick = () => {
    const selectElement = document.getElementById("area_usuario");

    let optionJson = {};
    Array.from(selectElement.options).forEach((option) => {
        optionJson[option.value] = option.selected;
    });
    console.log("optionJson :", optionJson);
    Array.from(selectElement.options).forEach((option) => {
        option.addEventListener('click', () => {

            if (optionJson[option.value]) {
                option.selected = false;
            }

            optionJson[option.value] = !optionJson[option.value];
            Array.from(selectElement.options).forEach(opcion => {
                opcion.selected = optionJson[opcion.value];
                let index = areas.indexOf(opcion.value);
                if (optionJson[opcion.value]) {
                    if (index === -1) {
                        areas.push(opcion.value);
                    }

                } else {

                    if (index !== -1) {
                        areas.splice(index, 1);
                    }
                }
            });
            console.log('areas :', areas);
        })
    });


}

const setUsername = () => {
    const apellidos = document.getElementById("apellidos-usuario");
    const nombres = document.getElementById("nombres_usuario");
    const username = document.getElementById("username-usuario");


    username.addEventListener('mousedown', () => {
        if (apellidos.value.length > 2 && nombres.value.length > 2) {
            username.value = `${nombres.value.split(' ')[0]} ${apellidos.value.split(' ')[0]}`;
        }
    });

}
const enviarForm = () => {
    const formUsuario = document.getElementById('form-usuario');

    formUsuario.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(formUsuario);
        const checkboxConfirmacion = document.getElementById('confirmacion');
        const cumpleInput = document.getElementById('cumple_usuario');
        const user = Object.fromEntries(formData);

        console.log(user);
        const allTrue = Object.values(check).every(value => value === true);
        console.log("check :", check)
        console.log("checkboxConfirmacion :", checkboxConfirmacion.checked)
        if (allTrue && checkboxConfirmacion.checked && areas.length > 0) {
            user.area = areas.toString();
            axios.post('/registrar-usuario', user, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response => {
                if (response.data) {

                    Swal.fire({
                        title: response.data.title,
                        text: response.data.text,
                        icon: 'success',
                        timer: 5000,
                        returnFocus: false
                    })
                    //reset
                    formUsuario.reset();
                    cumpleInput.value = '2000-01-01';
                    check = {
                        pass: false,
                        username: false,
                        email: false,
                    }

                }
            }).catch(error => {
                console.log("[error]", error);
            });
        } else {
            Swal.fire({
                title: 'Formulario Incorrecto!',
                text: 'Completa de correctamente el formulario',
                icon: 'warning',
                timer: 5000,
                returnFocus: false
            })
        }
    });
}

const verificarPass = () => {
    const passwordField = document.getElementById('password_usuario');
    const confirmPasswordField = document.getElementById('password_confirm_usuario');
    const passwordError = document.getElementById('password_error');
    const spanElement = passwordError.querySelector('span');

    confirmPasswordField.addEventListener('keyup', () => {
        console.log("1");
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                check.pass = true;
                console.log("2");
            } else {
                console.log("3");
                passwordError.classList.remove('alert-campo--disable');
                check.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {

            if (confirmPasswordField.value.length !== 0) {
                console.log("4");
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                console.log("5");
                passwordError.classList.add('alert-campo--disable');
            }
            check.pass = false;
        }
    });

    passwordField.addEventListener('keyup', () => {

        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                check.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                check.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {

            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            check.pass = false;
        }
    });

    confirmPasswordField.addEventListener('paste', () => {
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                check.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                check.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {
            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            check.pass = false;
        }
    });

    confirmPasswordField.addEventListener('click', () => {
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                check.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                check.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {
            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            check.pass = false;
        }
    });

    confirmPasswordField.addEventListener('input', () => {
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                check.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                check.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {
            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            check.pass = false;
        }
    });


}

const defaultDevs = () => {
    // Obtener referencia a los elementos del formulario
    const apellidosInput = document.getElementById('apellidos-usuario');
    const nombresInput = document.getElementById('nombres_usuario');
    const dniInput = document.getElementById('dni_usuario');
    const edadInput = document.getElementById('edad_usuario');
    const cumpleInput = document.getElementById('cumple_usuario');
    const sexoSelect = document.getElementById('sexo_usuario');
    const celularInput = document.getElementById('celular_usuario');
    const direccionInput = document.getElementById('direccion_usuario');
    const distritoSelect = document.getElementById('distrito_usuario');
    const usernameInput = document.getElementById('username-usuario');
    const emailInput = document.getElementById('email-usuario');
    const rolSelect = document.getElementById('rol_usuario');
    const cargoSelect = document.getElementById('cargo_usuario');
    const areaSelect = document.getElementById('area_usuario');

    // Establecer los valores por defecto
    apellidosInput.value = 'Caballero Huamani';
    nombresInput.value = 'Hilton Bill';
    dniInput.value = '46489018';
    edadInput.value = '30';
    cumpleInput.value = '2000-01-01';
    sexoSelect.value = 'Masculino';
    celularInput.value = '986545123';
    direccionInput.value = 'La cueva';
    distritoSelect.value = 'Pucusuna';
    usernameInput.value = 'Hilton Caballero';
    emailInput.value = 'Hilton.Bill@gmail.com';
    rolSelect.value = 'Usuario estandar';
    cargoSelect.value = 'Inspector Municipal';
    // areaSelect.value = ['TRANSPORTE', 'SEGURIDAD CIUDADANA'];
}

const validateEmail = () => {

    const emailInput = document.getElementById('email-usuario');
    const alertemail = document.getElementById('email-error');

    emailInput.addEventListener('keyup', (e) => {
        if (e.target.value.length >= 8) {
            axios.get(`/buscar-email/${e.target.value}`)
                .then(response => {
                    console.log('user:', response.data);
                    if (response.data) {
                        alertemail.classList.remove('alert-campo--disable');
                        check.email = false;
                    } else {
                        alertemail.classList.add('alert-campo--disable');
                        check.email = true;
                    }

                }).catch(error => {
                    console.log("error axios", error)
                });
        } else {
            alertemail.classList.add('alert-campo--disable');
        }
    });

    emailInput.addEventListener('mouseup', (e) => {
        if (e.target.value.length >= 8) {
            console.log("buscando email")
            axios.get(`/buscar-email/${e.target.value}`)
                .then(response => {
                    console.log('user:', response.data);
                    if (response.data) {
                        alertemail.classList.remove('alert-campo--disable');
                    } else {
                        alertemail.classList.add('alert-campo--disable');
                    }

                }).catch(error => {
                    console.log("error axios", error)
                });
        } else {
            alertemail.classList.add('alert-campo--disable');
        }
    });
}

const validateUsername = () => {
    const usernameInput = document.getElementById('username-usuario');
    const alertUsername = document.getElementById('username-error');

    usernameInput.addEventListener('keyup', (e) => {
        if (e.target.value.length >= 8) {
            axios.get(`/buscar-username/${e.target.value}`)
                .then(response => {
                    console.log('user:', response.data);
                    if (response.data) {
                        alertUsername.classList.remove('alert-campo--disable');
                        check.username = false;
                    } else {
                        alertUsername.classList.add('alert-campo--disable');
                        check.username = true;
                    }

                }).catch(error => {
                    console.log("error axios", error)
                });
        } else {
            alertUsername.classList.add('alert-campo--disable');
        }
    });

    usernameInput.addEventListener('mouseup', (e) => {
        if (e.target.value.length >= 8) {
            console.log("buscando")
            axios.get(`/buscar-username/${e.target.value}`)
                .then(response => {
                    console.log('user:', response.data);
                    if (response.data) {
                        alertUsername.classList.remove('alert-campo--disable');
                    } else {
                        alertUsername.classList.add('alert-campo--disable');
                    }

                }).catch(error => {
                    console.log("error axios", error)
                });
        } else {
            alertUsername.classList.add('alert-campo--disable');
        }
    });


}



const validateEmailOrUsername = () => {
    const usernameOrEmail = document.getElementById('username-usuario-pass');
    const usernameOrEmailAlert = document.getElementById('username-pass-error');
    const password = document.getElementById('password_usuario-pass');


    usernameOrEmail.addEventListener('keyup', (e) => {
        if (usernameOrEmail.value.length >= 8) {
            axios.get(`/buscar-username-or-email/${e.target.value}`)
                .then(response => {
                    console.log('user:', response.data);
                    if (response.data) {
                        usernameOrEmailAlert.classList.add('alert-campo--disable');
                        checkPass.username = true;
                    } else {
                        usernameOrEmailAlert.classList.remove('alert-campo--disable');
                        checkPass.username = false;
                    }

                }).catch(error => {
                    console.log("error axios", error)
                });
        }
    });



}

const verificarPassword = () => {
    const passwordField = document.getElementById('password_usuario-pass');
    const confirmPasswordField = document.getElementById('password_confirm_usuario-pass');
    const passwordError = document.getElementById('password-error-pass');
    const spanElement = passwordError.querySelector('span');
    confirmPasswordField.addEventListener('keyup', () => {
        console.log("1");
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                check.pass = true;
                console.log("2");
            } else {
                console.log("3");
                passwordError.classList.remove('alert-campo--disable');
                check.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {

            if (confirmPasswordField.value.length !== 0) {
                console.log("4");
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                console.log("5");
                passwordError.classList.add('alert-campo--disable');
            }
            check.pass = false;
        }
    });

    passwordField.addEventListener('keyup', () => {

        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                checkPass.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                checkPass.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {

            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            checkPass.pass = false;
        }
    });

    confirmPasswordField.addEventListener('paste', () => {
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                checkPass.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                checkPass.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {
            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            checkPass.pass = false;
        }
    });

    confirmPasswordField.addEventListener('click', () => {
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                checkPass.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                checkPass.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {
            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            checkPass.pass = false;
        }
    });

    confirmPasswordField.addEventListener('input', () => {
        if (confirmPasswordField.value.length >= 8) {

            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.add('alert-campo--disable');
                checkPass.pass = true;

            } else {
                passwordError.classList.remove('alert-campo--disable');
                checkPass.pass = false;
                spanElement.textContent = 'Las contraseñas no coinciden.';
            }
        } else {
            if (confirmPasswordField.value.length !== 0) {
                passwordError.classList.remove('alert-campo--disable');
                spanElement.textContent = 'La contraseña debe tener más de 8 caracteres.';

            } else {
                passwordError.classList.add('alert-campo--disable');
            }
            checkPass.pass = false;
        }
    });
}

const checkPass = {
    username: false,
    pass: false
}
const sendFormPass = () => {
    const formPass = document.getElementById('form-pass');

    formPass.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(formPass);
        const user = Object.fromEntries(formData);
        const allTrue = Object.values(checkPass).every(value => value === true);

        if (allTrue) {
            axios.post('/actualizar-password', user)
                .then(response => {
                    if (response.data) {
                        console.log("resposen data:",response.data);
                        Swal.fire({
                            title: response.data.title,
                            text: response.data.text,
                            icon: 'success',
                            timer: 3000,
                            returnFocus: false
                        })
                        //reset
                        formPass.reset();

                        checkPass = {
                            username: false,
                            pass: false
                        }

                    }
                }).catch(error => {
                    console.log("[error]", error);
                });
        }else{
            Swal.fire({
                title: 'Datos Incorrecto!',
                text: 'Completa de correctamente el formulario',
                icon: 'warning',
                timer: 3000,
                returnFocus: false
            })
        }

    });
}
mainUser();


