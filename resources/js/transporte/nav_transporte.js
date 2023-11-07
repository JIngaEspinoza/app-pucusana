import { listaVehiculos } from './vehiculo';
import { listReport } from './reporte';
import { listaPapeletas } from './papeletas';

const contenedorPrincipal = document.getElementById('contenido-principal');
const itemConsulta = document.getElementById('itemConsulta');
const itemReporte = document.getElementById('itemReporte');
const itemPapeleta = document.getElementById('itemPapeleta');
const itemPago = document.getElementById('itemPago');

let stateTablevehiculos = false;
let stateChartReport = false;
let stateTablePapeletas = false;

const listItems = [
    {
        element: itemConsulta,
        title: 'Consulta vehicular',
        route: {
            consulta: '/consulta-vehicular/consulta',
            registro: '/consulta-vehicular/registro'
        },
        classContainer: document.querySelector('.container-vehiculos')

    },
    {
        element: itemReporte,
        title: 'Reportes laborales',
        route: {
            consulta: '/reportes-laborales/consulta',
            registro: '/reportes-laborales/registro'
        },
        classContainer: document.querySelector('.container-reportes')
    },
    {
        element: itemPapeleta,
        title: 'Papeletas',
        route: {
            consulta: '/papeletas/consulta',
            registro: '/papeletas/registro'
        },
        classContainer: document.querySelector('.container-papeletas')
    }, {
        element: itemPago,
        title: 'Orden de pago',
        route: {
            consulta: '/orden-de-pago/consulta',
            registro: '/orden-de-pago/registro'
        },
        classContainer: document.querySelector('.container-pagos')
    }];


const setRoute = (listItems) => {
    console.log("[setRoute]")
    const title = document.title;
    // listItems.forEach(e => {
    //     const container = e.classContainer;
    //     container.classList.add('desactive');
    // });
    contenedorPrincipal.innerHTML = "";
    listItems.forEach(e => {
        if (title === e.title) {
            e.element.classList.add('active');
            const hijoPlomo = e.element.querySelector('.item__icono');
            const hijoBlanco = e.element.querySelector('.item__icono--blanco');
            hijoPlomo.classList.add('disable');
            hijoBlanco.classList.remove('disable');

            /**CAMBIO DE VISTA DE MODULOS */
            // const container = e.classContainer;
            // container.classList.remove('desactive');
            contenedorPrincipal.appendChild(e.classContainer);
            if (title === 'Consulta vehicular') {
                stateTablevehiculos = true;
                listaVehiculos();
            }
            /**************************** */
            if (title === 'Reportes laborales') {
                stateChartReport = true;
                listReport();
            }

            if (title === 'Papeletas') {
                stateTablevehiculos = true;
                listaPapeletas();
            }
        }
    });
}

const setStates = (list) => {
    const title = document.title;
    const options = document.querySelectorAll('.options');
    const items = document.querySelectorAll('.item');
    console.log("[setStates]")


    list.forEach(e => {
        e.element.addEventListener('click', () => {
            document.title = e.title


            items.forEach((item) => {

                const hijoPlomo = item.querySelector('.item__icono');
                const hijoBlanco = item.querySelector('.item__icono--blanco');
                hijoPlomo.classList.remove('disable');
                hijoBlanco.classList.add('disable');
                item.classList.remove('active');
            })

            e.element.classList.add('active');
            const hijoPlomo = e.element.querySelector('.item__icono');
            const hijoBlanco = e.element.querySelector('.item__icono--blanco');
            hijoPlomo.classList.add('disable');
            hijoBlanco.classList.remove('disable');

            /**CAMBIO DE VISTA DE MODULOS */
            // options.forEach(option => {
            //     option.classList.add('desactive');
            // });
            const container = e.classContainer;
            // container.classList.remove('desactive');
            contenedorPrincipal.innerHTML = "";
            contenedorPrincipal.appendChild(e.classContainer);
            /**************************** */

            const rutaAccion = container.querySelector('#rutaAccion');
            //rutaAccion.textContent = 'Consulta';
            console.log('rutaAccion.textContent', `${rutaAccion.textContent.toLowerCase()}`);
            history.pushState(null, e.title, e.route[`${rutaAccion.textContent.toLowerCase()}`]);
            // hstory.pushState(null, e.title, e.route[`${rutaAccion.textContent.toLowerCase()}`]);


        })

    });
}

const cargarTablaVehiculos = () => {
    const e = listItems[0]; //Consulta vehicular
    e.element.addEventListener('click', () => {
        console.log("stateTablevehiculos", stateTablevehiculos)
        if (e.title === 'Consulta vehicular' && !stateTablevehiculos) {
            console.log("[setStates] execute listaVehiculos")
            stateTablevehiculos = true;
            listaVehiculos();
        }
    });

}

const cargarTablaPapeletas = () => {
    const e = listItems[0]; //Consulta vehicular
    e.element.addEventListener('click', () => {
        console.log("stateTablePapeletas", stateTablePapeletas)
        if (e.title === 'Papeletas' && !stateTablePapeletas) {
            console.log("[setStates] execute listaPapeletas")
            stateTablePapeletas = true;
            listaPapeletas();
        }
    });

}

const cargarChartReport = () => {
    const e = listItems[1]; //Reportes laborales
    e.element.addEventListener('click', () => {
        console.log("stateChartReport", stateChartReport)
        if (e.title === 'Reportes laborales' && !stateChartReport) {
            console.log("[setStates] execute listReport")
            stateChartReport = true;
            listReport();
        }
    });

}

const SwapInput = () => {
    jQuery(document).ready(function ($) {
        $(document).ready(function () {
            $('#offenderSelect').select2();
        });
    });
}


const changeAction = (itemList) => {
    //cambio el bloque segun el subnavegador
    itemList.forEach(item => {

        const container = item.classContainer;
        const optionsMenu = container.querySelectorAll('.opcion');
        const rutaAccion = container.querySelector('#rutaAccion');
        const consulta = container.querySelector('.consulta');
        const registro = container.querySelector('.registro');

        // const consultaSinResultados = document.getElementById('sin_resultados');
        // const consultaConResultados = document.getElementById('con_resultados');


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

                    // if (item.title == 'Consulta vehicular') {
                    //     consultaConResultados.classList.add('seccion-resultado-vehiculo--desactive');
                    //     consultaSinResultados.classList.add('vista-sin-resultados--desactive');
                    // }
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

                // if (item.title == 'Consulta vehicular') {
                //     consultaConResultados.classList.add('seccion-resultado-vehiculo--desactive');
                //     consultaSinResultados.classList.add('vista-sin-resultados--desactive');
                // }

            }
            if (rutaAccion.textContent === 'Registro') {

                consulta.classList.add('consulta--desactive');
                registro.classList.remove('registro--desactive');
            }
        }

        item.element.addEventListener('click', () => {
            console.log('[click]', rutaAccion.textContent)
            if (rutaAccion.textContent === 'Consulta') {

                consulta.classList.remove('consulta--desactive');
                registro.classList.add('registro--desactive');

                // if (item.title == 'Consulta vehicular') {
                //     consultaConResultados.classList.add('seccion-resultado-vehiculo--desactive');
                //     consultaSinResultados.classList.add('vista-sin-resultados--desactive');
                // }

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
            if (option.textContent === rutaAccion.textContent) {
                option.classList.add('opcion--active');
                break;
            }
        }



    });
}
setStates(listItems);
setRoute(listItems);
changeAction(listItems);


cargarTablaVehiculos();
cargarChartReport();
cargarTablaPapeletas();


const modalGeneral = document.getElementById('modal_general')
const btnCerrarModal = document.getElementById('btn-cerrar-modal');

if (modalGeneral) {
    btnCerrarModal.addEventListener('click', () => {
        console.log('click cancel')

        modalGeneral.classList.add('disable-modal')
    });
}






