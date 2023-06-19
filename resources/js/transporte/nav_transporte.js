import {setStates,setRoute} from './library';
const itemConsulta = document.getElementById('itemConsulta');
const itemReporte = document.getElementById('itemReporte');
const itemPapeleta = document.getElementById('itemPapeleta');
const itemPago = document.getElementById('itemPago');

const listItems = [
    {
        element: itemConsulta,
        title: 'Consulta vehicular',
        route: '/consulta-vehicular/consulta',
        classContainer:'.container-vehiculos',

    },
    {
        element: itemReporte,
        title: 'Reportes laborales',
        route: '/reportes-laborales/consulta',
        classContainer:'.container-reportes'
    },
    {
        element: itemPapeleta,
        title: 'Papeletas',
        route: '/papeletas/consulta',
        classContainer:'.container-papeletas'
    },{
        element: itemPago,
        title: 'Orden de pago',
        route: '/orden-de-pago/consulta',
        classContainer:'.container-pagos'
    }];

setStates(listItems);
setRoute(listItems);



