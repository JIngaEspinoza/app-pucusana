
const iconMenu = document.querySelector('.menu-burguer');
const bodyItems = document.querySelector('.items');
const navCuerpo = document.getElementById('nacCuerpo');
const icons = document.querySelectorAll('.iconOption');
const olaSup = document.querySelector('.ola_superior__url');
const olaInfo = document.querySelector('.ola_inferior__url');
const logoPucu = document.querySelector('.logo-pucu');

iconMenu.addEventListener('click', function () {
    if (iconMenu.classList.contains('open')) {
        iconMenu.classList.remove('open');
    } else {
        iconMenu.classList.add('open');
    }

    if (navCuerpo.classList.contains('active-complex')) {
        //incomplex
        olaSup.classList.remove('active-complex');
        olaInfo.classList.remove('active-complex');
        items.forEach(item => {
            const spanElement = item.querySelector('span.item__nombre');
            spanElement.classList.remove('active-complex');
            item.classList.remove('active-complex');
        });

        icons.forEach(icon =>{
            icon.classList.remove('active-complex')
        })

        bodyItems.classList.remove('active-complex');
        navCuerpo.classList.remove('active-complex');
        logoPucu.classList.remove('active-complex');
    } else {
        //complex
        olaSup.classList.add('active-complex');
        olaInfo.classList.add('active-complex');
        items.forEach(item => {
            const spanElement = item.querySelector('span.item__nombre');
            spanElement.classList.add('active-complex');
            item.classList.add('active-complex');
        });

        icons.forEach(icon =>{
            icon.classList.add('active-complex')
        })

        bodyItems.classList.add('active-complex');
        navCuerpo.classList.add('active-complex');
        logoPucu.classList.add('active-complex');
    }
}, false);


const items = document.querySelectorAll('.item');
const options = document.querySelectorAll('.options');



const itemConsulta = document.getElementById('itemConsulta');
itemConsulta.addEventListener('click',()=>{
    document.title = 'Consulta vehicular'
    history.pushState(null, 'Consulta vehicular', '/consulta-vehicular');
    items.forEach((item)=>{
        item.classList.remove('active');
        const hijoPlomo = item.querySelector('.item__icono');
        const hijoBlanco = item.querySelector('.item__icono--blanco');
        hijoPlomo.classList.remove('disable');
        hijoBlanco.classList.add('disable');
    })

    itemConsulta.classList.add('active');
    const hijoPlomo = itemConsulta.querySelector('.item__icono');
    const hijoBlanco = itemConsulta.querySelector('.item__icono--blanco');
    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');

    options.forEach(option=>{
        option.classList.add('desactive');
    });

    const container = document.querySelector('.container-vehiculos');
    container.classList.remove('desactive');

})

const itemReporte = document.getElementById('itemReporte');
itemReporte.addEventListener('click',()=>{
    document.title = 'Reportes laborales'
    history.pushState(null, 'Reportes laborales', '/reportes-laborales');
    items.forEach((item)=>{
        item.classList.remove('active');
        const hijoPlomo = item.querySelector('.item__icono');
        const hijoBlanco = item.querySelector('.item__icono--blanco');
        hijoPlomo.classList.remove('disable');
        hijoBlanco.classList.add('disable');
    })

    itemReporte.classList.add('active');
    const hijoPlomo = itemReporte.querySelector('.item__icono');
    const hijoBlanco = itemReporte.querySelector('.item__icono--blanco');
    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');

    options.forEach(option=>{
        option.classList.add('desactive');
    });

    const container = document.querySelector('.container-reportes');
    container.classList.remove('desactive');

})

const itemPapeleta = document.getElementById('itemPapeleta');
itemPapeleta.addEventListener('click',()=>{
    document.title = 'Papeletas'
    history.pushState(null, 'Papeletas', '/papeletas');
    items.forEach((item)=>{
        item.classList.remove('active');
        const hijoPlomo = item.querySelector('.item__icono');
        const hijoBlanco = item.querySelector('.item__icono--blanco');
        hijoPlomo.classList.remove('disable');
        hijoBlanco.classList.add('disable');
    })

    itemPapeleta.classList.add('active');
    const hijoPlomo = itemPapeleta.querySelector('.item__icono');
    const hijoBlanco = itemPapeleta.querySelector('.item__icono--blanco');
    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');

    options.forEach(option=>{
        option.classList.add('desactive');
    });

    const container = document.querySelector('.container-papeletas');
    container.classList.remove('desactive');

})

const itemPago = document.getElementById('itemPago');
itemPago.addEventListener('click',()=>{
    document.title = 'Orden de pago'
    history.pushState(null, 'Orden de pago', '/orden-de-pago');
    items.forEach((item)=>{
        item.classList.remove('active');
        const hijoPlomo = item.querySelector('.item__icono');
        const hijoBlanco = item.querySelector('.item__icono--blanco');
        hijoPlomo.classList.remove('disable');
        hijoBlanco.classList.add('disable');
    })

    itemPago.classList.add('active');
    const hijoPlomo = itemPago.querySelector('.item__icono');
    const hijoBlanco = itemPago.querySelector('.item__icono--blanco');
    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');

    options.forEach(option=>{
        option.classList.add('desactive');
    });

    const container = document.querySelector('.container-pagos');
    container.classList.remove('desactive');

})


// const listItems = [
//     {
//         element: itemConsulta,
//         title: 'Consulta vehicular',
//         route: '/consulta-vehicular',
//         classContainer:'.container-vehiculos'
//     },
//     {
//         element: itemReporte,
//         title: 'Reportes laborales',
//         route: '/reportes-laborales',
//         classContainer:'.container-reportes'
//     },
//     {
//         element: itemPapeleta,
//         title: 'Papeletas',
//         route: '/papeletas',
//         classContainer:'.container-papeletas'
//     },{
//         element: itemPago,
//         title: 'Orden de pago',
//         route: '/orden-de-pago',
//         classContainer:'.container-pagos'
//     }];

// const setStates=(list) =>{
//     list.forEach(e => {
//         e.element.addEventListener('click',()=>{
//             document.title = e.title
//             history.pushState(null, e.title, e.route);
//             items.forEach((item) => {
//                 item.classList.remove('active');
//                 const hijoPlomo = item.querySelector('.item__icono');
//                 const hijoBlanco = item.querySelector('.item__icono--blanco');
//                 hijoPlomo.classList.remove('disable');
//                 hijoBlanco.classList.add('disable');
//             })

//             e.element.classList.add('active');
//             const hijoPlomo = e.element.querySelector('.item__icono');
//             const hijoBlanco = e.element.querySelector('.item__icono--blanco');
//             hijoPlomo.classList.add('disable');
//             hijoBlanco.classList.remove('disable');

//             options.forEach(option => {
//                 option.classList.add('desactive');
//             });

//             const container = document.querySelector(e.classContainer);
//             container.classList.remove('desactive');
//         })
//     });
// }

// setStates(listItems);


const title = document.title;
 console.log(title);

if (title === 'Consulta vehicular') {
    itemConsulta.classList.add('active');
    const hijoPlomo = itemConsulta.querySelector('.item__icono');
    const hijoBlanco = itemConsulta.querySelector('.item__icono--blanco');

    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');


    const container = document.querySelector('.container-vehiculos');
    container.classList.remove('desactive');
}

if (title === 'Reportes laborales') {
    itemReporte.classList.add('active');
    const hijoPlomo = itemReporte.querySelector('.item__icono');
    const hijoBlanco = itemReporte.querySelector('.item__icono--blanco');

    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');



    const container = document.querySelector('.container-reportes');
    container.classList.remove('desactive');
}
if (title === 'Papeletas') {
    itemPapeleta.classList.add('active');
    const hijoPlomo = itemPapeleta.querySelector('.item__icono');
    const hijoBlanco = itemPapeleta.querySelector('.item__icono--blanco');

    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');



    const container = document.querySelector('.container-papeletas');
    container.classList.remove('desactive');
}
if (title === 'Orden de pago') {
    itemPago.classList.add('active');
    const hijoPlomo = itemPago.querySelector('.item__icono');
    const hijoBlanco = itemPago.querySelector('.item__icono--blanco');

    hijoPlomo.classList.add('disable');
    hijoBlanco.classList.remove('disable');



    const container = document.querySelector('.container-pagos');
    container.classList.remove('desactive');
}














