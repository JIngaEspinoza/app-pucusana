import { setStates, setRoute } from './general_LBRY';
import { changeAction } from './transporte_LBRY';

const itemConsulta = document.getElementById('itemConsulta');
const itemReporte = document.getElementById('itemReporte');
const itemPapeleta = document.getElementById('itemPapeleta');
const itemPago = document.getElementById('itemPago');

const listItems = [
    {
        element: itemConsulta,
        title: 'Consulta vehicular',
        route: {
            consulta:'/consulta-vehicular/consulta',
            registro:'/consulta-vehicular/registro'
        },
        classContainer:'.container-vehiculos',

    },
    {
        element: itemReporte,
        title: 'Reportes laborales',
        route: {
            consulta:'/reportes-laborales/consulta',
            registro:'/reportes-laborales/registro'
        },
        classContainer:'.container-reportes'
    },
    {
        element: itemPapeleta,
        title: 'Papeletas',
        route: {
            consulta:'/papeletas/consulta',
            registro:'/papeletas/registro'
        },
        classContainer:'.container-papeletas'
    },{
        element: itemPago,
        title: 'Orden de pago',
        route: {
            consulta:'/orden-de-pago/consulta',
            registro:'/orden-de-pago/registro'
        },
        classContainer:'.container-pagos'
    }];

setStates(listItems);
setRoute(listItems);
changeAction(listItems);




