const changeAction = (itemList) => {
    //cambio el bloque segun el subnavegador
    itemList.forEach(item => {

        const container = document.querySelector(item.classContainer);
        const optionsMenu = container.querySelectorAll('.opcion');
        const rutaAccion = container.querySelector('#rutaAccion');
        const consulta = container.querySelector('.consulta');
        const registro = container.querySelector('.registro');
        optionsMenu.forEach(option => {
            option.addEventListener('click', () => {
                optionsMenu.forEach(option => {
                    option.classList.remove('opcion--active');
                });
                option.classList.add('opcion--active');
                rutaAccion.textContent = option.textContent;

                document.title = item.title


                if (option.textContent === 'Consulta') {
                    history.pushState(null, item.title, item.route.consulta);
                    consulta.classList.remove('consulta--desactive');
                    registro.classList.add('registro--desactive');
                }
                if (option.textContent === 'Registro') {
                    history.pushState(null, item.title, item.route.registro);
                    consulta.classList.add('consulta--desactive');
                    registro.classList.remove('registro--desactive');
                }

            })


        });


        const title = document.title;

        if (title === item.title) {

            if (rutaAccion.textContent === 'Consulta') {

                consulta.classList.remove('consulta--desactive');
                registro.classList.add('registro--desactive');

            }
            if (rutaAccion.textContent === 'Registro') {

                consulta.classList.add('consulta--desactive');
                registro.classList.remove('registro--desactive');
            }
        }

        item.element.addEventListener('click',()=>{
            console.log('[click]',rutaAccion.textContent)
            if (rutaAccion.textContent === 'Consulta') {

                consulta.classList.remove('consulta--desactive');
                registro.classList.add('registro--desactive');

            }
            if (rutaAccion.textContent === 'Registro') {

                consulta.classList.add('consulta--desactive');
                registro.classList.remove('registro--desactive');
            }
        })


        //Resaltado de las opciones del subnavegador cuando recarga la pagina
        for (let i = 0; i < optionsMenu.length; i++) {
            const option = optionsMenu[i];
            optionsMenu.forEach(option => {
                option.classList.remove('opcion--active');
            });
            if (option.textContent===rutaAccion.textContent) {
                option.classList.add('opcion--active');
                break;
            }
        }



    });
}



export {changeAction};
