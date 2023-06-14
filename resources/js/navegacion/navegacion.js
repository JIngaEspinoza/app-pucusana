console.log("HILTON CTMRE");


const itemUsuario = document.getElementById('item-usuario');
const classUsuario = document.querySelector('.usuario');

itemUsuario.addEventListener('mouseenter',()=>{
    console.log("entra")
    classUsuario.classList.add('active-usuario');
    //classUsuario.style.backgroundImage = "url(asset('storage') . '/' . 'uploads/navegacion/icono_usuarios_blanco.svg')"
})

