
const setRoute = (listItems) =>{
    console.log("[setRoute]")
    const title = document.title;
    listItems.forEach(e=>{
        if (title === e.title) {
            e.element.classList.add('active');
            const hijoPlomo = e.element.querySelector('.item__icono');
            const hijoBlanco = e.element.querySelector('.item__icono--blanco');
            hijoPlomo.classList.add('disable');
            hijoBlanco.classList.remove('disable');
            const container = document.querySelector(e.classContainer);
            container.classList.remove('desactive');
        }
    });
}

const setStates=(list) =>{
    const options = document.querySelectorAll('.options');
    const items = document.querySelectorAll('.item');
    console.log("[setStates]")
    list.forEach(e => {
        e.element.addEventListener('click',()=>{
            document.title = e.title
            history.pushState(null, e.title, e.route);

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


            options.forEach(option => {
                option.classList.add('desactive');
            });

            const container = document.querySelector(e.classContainer);
            container.classList.remove('desactive');
        })
    });
}


export {setStates,setRoute};

