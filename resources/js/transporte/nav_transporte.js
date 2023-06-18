import {setStates,setRoute} from './library';
const itemConsulta = document.getElementById('itemConsulta');
const itemReporte = document.getElementById('itemReporte');
const itemPapeleta = document.getElementById('itemPapeleta');
const itemPago = document.getElementById('itemPago');

const listItems = [
    {
        element: itemConsulta,
        title: 'Consulta vehicular',
        route: '/consulta-vehicular',
        classContainer:'.container-vehiculos'
    },
    {
        element: itemReporte,
        title: 'Reportes laborales',
        route: '/reportes-laborales',
        classContainer:'.container-reportes'
    },
    {
        element: itemPapeleta,
        title: 'Papeletas',
        route: '/papeletas',
        classContainer:'.container-papeletas'
    },{
        element: itemPago,
        title: 'Orden de pago',
        route: '/orden-de-pago',
        classContainer:'.container-pagos'
    }];

setStates(listItems);
setRoute(listItems);
