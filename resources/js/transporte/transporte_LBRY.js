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

const setEmpresa =(numeroMunicipal) =>{
    const empresas =[
        {
            nombre:'AMTUP',
            min:1,
            max:100
        },
        {
            nombre:'ATOMI',
            min:101,
            max:200
        },
        {
            nombre:'PUCUSANA EXPRESS',
            min:201,
            max:300
        },
        {
            nombre:'BOCANA',
            min:301,
            max:400
        },
        {
            nombre:'SAN JERONIMO',
            min:501,
            max:551
        },
        {
            nombre:'NUEVA VIDA',
            min:601,
            max:650
        },
        {
            nombre:'AMIGOS GEMINIS',
            min:701,
            max:752
        },
        {
            nombre:'RAYOS DEL SUR',
            min:801,
            max:850
        },
        {
            nombre:'LOS METEORITOS',
            min:901,
            max:950
        }
    ]

    const valor = parseInt(numeroMunicipal)

    for (let i = 0; i < empresas.length; i++) {
        const empresa = empresas[i];

        console.log("valor:",valor)
        console.log("empresa:",empresa)
        if(empresa.min <= valor && valor <= empresa.max) {
            return empresa.nombre;
        }

    }
    return null;
}

//Vehiculos




export {changeAction,setEmpresa};
