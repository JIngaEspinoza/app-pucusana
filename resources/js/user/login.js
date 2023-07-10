import axios from "axios";
const mainLogin = () => {
    changeSection();
    sendForm();
}

const changeSection = () => {
    const btnLogin = document.querySelector('.buttons__login');
    const btnAbout = document.querySelector('.buttons__about');
    const spaceLogin = document.querySelector('.space');
    const spaceAbout = document.querySelector('.space-about');

    btnLogin.addEventListener('click', () => {
        btnLogin.classList.add('active');
        btnAbout.classList.remove('active');

        spaceAbout.classList.add('disable');
        spaceLogin.classList.remove('disable');
    });

    btnAbout.addEventListener('click', () => {
        btnAbout.classList.add('active');
        btnLogin.classList.remove('active');

        spaceLogin.classList.add('disable');
        spaceAbout.classList.remove('disable');
    });

}

const sendForm = () => {
    const formLogin = document.getElementById('form-login');

    formLogin.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(formLogin);
        const isFormValid = Array.from(formData.values()).every(value => value.trim() !== '');
        const user = Object.fromEntries(formData);
        if (isFormValid) {
            // Los campos están llenos, puedes enviar el formulario
            // formLogin.submit();

            axios.post('/iniciar-sesion', user).then(response => {
                if (response.data) {
                    const check = response.data.check;
                    if (check ==='OK') {
                        Swal.fire({
                            title: response.data.title,
                            text: response.data.text,
                            icon: 'success',
                            timer: 3000,
                            returnFocus: false
                        }).then(() => {
                            window.location.href = '/modulos';
                        });
                    }else{
                        Swal.fire({
                            title: response.data.title,
                            text: response.data.text,
                            icon: 'warning',
                            timer: 3000,
                            returnFocus: false
                        }).then(() => {
                            Swal.close();
                        });
                    }


                }
            }).catch(error => {
                console.log("[error]", error);
                Swal.fire({
                    title: 'Error de conexion',
                    text: 'No se puede establecer una conexión',
                    icon: 'error',
                    timer: 2000,
                    returnFocus: false
                }).then(() => {
                    Swal.close();
                });
            });
        } else {
            // Mostrar un mensaje de error o realizar alguna otra acción
            Swal.fire({
                title: 'Formulario Incompleto',
                text: 'Por favor, completa todos los campos del Login.',
                icon: 'warning',
                timer: 3000,
                returnFocus: false
            }).then(() => {
                Swal.close();
            });
        }
    });
}

mainLogin();


