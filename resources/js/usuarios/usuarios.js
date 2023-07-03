const main = () => {
    try {



        cargarDistritos();
        changeAction();
        setImage();
        seleccionarUnClick();
        setUsername();
        verificarPass();
        // enviarForm();

        defaultDevs();

    } catch (error) {
        console.log(error);
    }
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
            });

        })
    });


}

const setUsername = () => {
    const apellidos = document.getElementById("apellidos-usuario");
    const nombres = document.getElementById("nombres_usuario");
    const username = document.getElementById("username-usuario");


    username.addEventListener('click', () => {
        if (apellidos.value.length > 2 && nombres.value.length > 2) {
            username.value = `${nombres.value.split(' ')[0]} ${apellidos.value.split(' ')[0]}`;
        }
    });

}
const enviarForm = () =>{
    const formUsuario = document.getElementById('form-usuario');

    formUsuario.addEventListener('submit',(e)=>{
        e.preventDefault();
        const formData = new FormData(formUsuario);

        const entity = Object.fromEntries(formData);
        console.log(entity);
    });
}

const verificarPass = () =>{
    const passwordField = document.getElementById('password_usuario');
    const confirmPasswordField = document.getElementById('password_confirm_usuario');
    const passwordError = document.getElementById('password_error');

    confirmPasswordField.addEventListener('keyup',()=>{
        console.log("Hello")
        if (confirmPasswordField.value.length>=8) {
            console.log("Hello 8")
            if (confirmPasswordField.value === passwordField.value) {
                console.log("Hello 8.1")

                passwordError.classList.add('alert-campo--disable');
            }else{
                console.log("Hello 8.2")
                passwordError.classList.remove('alert-campo--disable');
            }
        }
    });

    confirmPasswordField.addEventListener('paste',()=>{
        if (confirmPasswordField.value.length>=8) {
            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.remove('alert-campo--disable');
            }else{
                passwordError.classList.add('alert-campo--disable');
            }
        }
    });

    confirmPasswordField.addEventListener('click',()=>{
        if (confirmPasswordField.value.length>=8) {
            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.remove('alert-campo--disable');
            }else{
                passwordError.classList.add('alert-campo--disable');
            }
        }
    });

    confirmPasswordField.addEventListener('input',()=>{
        if (confirmPasswordField.value.length>=8) {
            if (confirmPasswordField.value === passwordField.value) {
                passwordError.classList.remove('alert-campo--disable');
            }else{
                passwordError.classList.add('alert-campo--disable');
            }
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
    cumpleInput.value = '1983-01-01';
    sexoSelect.value = 'Masculino';
    celularInput.value = '986545123';
    direccionInput.value = 'La cueva';
    distritoSelect.value = 'Pucusuna';
    usernameInput.value = 'Hilton Caballero';
    emailInput.value = 'Hilton.Bill@gmail.com';
    rolSelect.value = 'Usuario estandar';
    cargoSelect.value = 'Inspector Municipal';
    areaSelect.value = ['TRANSPORTE', 'SEGURIDAD CIUDADANA'];
}

main();

