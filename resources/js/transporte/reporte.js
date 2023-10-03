import axios from "axios";

const mainReport = () => {
    sectionRegisterReport();
}

const sectionRegisterReport = () => {
    registerIncidence();
    setEvents();
}

const setEvents = () => {
    const types = document.getElementById('tipo');
    types.addEventListener('change', (e) => {
        loadSubTypes(e)
    });
}

const loadTypes = () => {

    var type = document.getElementById('tipo');

    axios.get('/reportes-laborales/types')
        .then(response => {
            // console.log("response.data :", response.data)
            const data = response.data

            data.forEach(i => {
                let opt = document.createElement('option');
                opt.value = i.id; 
                opt.text = i.tipo_nombre
                type.appendChild(opt)
            });
        }
    )
}

const loadSubTypes = (e) => {
    let a = e.target.value
    var subtype = document.getElementById('subtipo');
    axios.get(`/reportes-laborales/subtypes/`+a)
        .then(response => {
            console.log("response.data :", response.data)
            const data = response.data
            subtype.innerHTML = ""
            data.forEach(i => {
                let opt = document.createElement('option');
                opt.value = i.id; 
                opt.text = i.subtipo_nombre
                subtype.appendChild(opt)
            });
        }
    )
}

const registerIncidence = () => {
    const formIncidence = document.getElementById('form-incidence');

    formIncidence.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(formIncidence);
        const incidence = Object.fromEntries(formData);

        /*if (namePropietario.value == '' || namePropietario.value == 'No se encontró información'){
            Swal.fire({
                title: 'Alerta!',
                text: 'Debe completar el propietario',
                icon: 'warning',
                timer: 3000,
                returnFocus: false
            }).then(() => {
                Swal.close();
            }); return
        }

        if (nameChofer.value == '' || nameChofer.value == 'No se encontró información') {
            Swal.fire({
                title: 'Alerta!',
                text: 'Debe completar el chofer',
                icon: 'warning',
                timer: 3000,
                returnFocus: false
            }).then(() => {
                Swal.close();
            }); return
        }*/

        axios.post('/registrer-incidence', incidence).then(response => {
            if (response.data) {
                if (response.data) {

                    Swal.fire({
                        title: response.data.title,
                        text: response.data.text,
                        icon: 'success',
                        timer: 3000,
                        returnFocus: false
                    }).then(() => {
                        location.reload();
                    });

                }
            }
        }).catch(error => {
            console.log("[error]", error);
            Swal.fire({
                title: 'Error de conexion',
                text: 'Ha ocurrido un error al procesar la peticion.',
                icon: 'error',
                timer: 3000,
                returnFocus: false
            }).then(() => {
                Swal.close();
            });
        });
    });
}

const listReport = () => {

    var ctx = document.getElementById('chart').getContext('2d');

    axios.get('/reportes-laborales/chart')
        .then(response => {
            const month = response.data[0].month
            const label = response.data[0].label
            const data = response.data[0].data
            const backgroundColor = response.data[0].backgroundColor
            console.log("response.data :", response.data)

            new Chart(ctx,{
                type: 'bar',
                data: {
                    labels:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
                    datasets:[{"label":label,"data":data,"backgroundColor":backgroundColor}]
                }
            })

            loadTypes()
        })
        .catch(error => {
            console.error('Error al obtener los datos:', error);
        });       

}

mainReport();

export {listReport};