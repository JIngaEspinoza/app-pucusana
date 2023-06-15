
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




