
// const items = document.querySelectorAll('.item');
// const iconos = document.querySelectorAll('.item__icono');
// const iconosBlanco = document.querySelectorAll('.item__icono--blanco');
// console.log("items",items);
// console.log("iconos",iconos);
// console.log("iiconosBlanco",iconosBlanco);
// items.forEach((item,pos) => {
//     console.log("item",item);
//     console.log("pos",pos)
//     item.addEventListener('mouseenter',()=>{
//         iconos[pos].classList.add('disable');
//         iconosBlanco[pos].classList.remove('disable');
//     });
//     item.addEventListener('mouseleave',()=>{
//         iconosBlanco[pos].classList.add('disable');
//         iconos[pos].classList.remove('disable');
//     })
// });


var iconMenu = document.querySelector('.menu-burguer');

iconMenu.addEventListener('click', function() {
  if (iconMenu.classList.contains('open')) {
    iconMenu.classList.remove('open');
  } else {
    iconMenu.classList.add('open');
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










