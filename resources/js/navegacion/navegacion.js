const iconMenu = document.querySelector('.menu-burguer');
const bodyItems = document.querySelector('.items');
const navCuerpo = document.getElementById('nacCuerpo');
const icons = document.querySelectorAll('.iconOption');
const olaSup = document.querySelector('.ola_superior__url');
const olaInfo = document.querySelector('.ola_inferior__url');
const logoPucu = document.querySelector('.logo-pucu');
const items = document.querySelectorAll('.item');
const seccion = document.querySelector('.seccion');
const barra = document.querySelector('.barra');

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
        seccion.classList.remove('active-complex');

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
        seccion.classList.add('active-complex');

    }

}, false);

















