
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


changeAction();

