import axios from "axios";
import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive-dt';
import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net-responsive-dt/css/responsive.dataTables.css';
const checkChofer = document.getElementById('check_chofer');
const namePropietario = document.getElementById('name_propietario');
const nameChofer = document.getElementById('name_chofer');

const idPropietario = document.getElementById('id_propietario');
const idChofer = document.getElementById('id_chofer');

const nombreEntidadBuscar = document.getElementById('nombre_entidad_buscar');

// const formSearchVehiculo = document.getElementById('form_search_vehiculo');
// const valueVehiculo = document.getElementById('valor_vehiculo');

let propiestarioActiveSearch = false;
let propiestarioActiveMass = false;

const mainVehiculo = () => {
    sectionRegisterVehiculo();
    sectionListaVehiculo();
}
const sectionRegisterVehiculo = () => {
    setModal();
    uppercaseInputs();
    setNumeroMunicipal();
    clearFormEntity();
    clearFormSearch();
    disableTenico();
    autoCompleteState();
    stateEntity();
    searchEntity();
    registerEntity();
    registerVehiculo();
}

const sectionListaVehiculo = () => {
    // listaVehiculos();
}


const setModal = () => {

    const modalGeneral = document.getElementById('modal_general');
    const modalContent = document.getElementById('modal_content');

    //Registrar entidad
    const formEntity = document.getElementById('form_entity'); //html para crear entidad
    const btnOptionMas = document.querySelectorAll('.btn-mass') // boton que activa el modal de registrar entidad
    const btnCancelEntity = document.getElementById('btn_cancel_entity'); // boton que desactiva el modal de registrar entidad

    //Buscar entidad
    const formSearch = document.getElementById('form_search'); //html para buscar entidad
    const btnOptionBuscar = document.querySelectorAll('.btn-buscar') // boton que activa el modal de buscar entidad [btn-propietario , btn-chfer]
    const btnCancelBuscar = document.getElementById('btn_cancel_buscar'); // boton que desactiva el modal de buscar entidad



    btnCancelEntity.addEventListener('click', () => {
        console.log('click cancel')

        modalGeneral.classList.add('disable-modal');
        formEntity.reset();
    });
    btnOptionMas.forEach((optionMas, i) => {
        optionMas.addEventListener('click', () => {
            propiestarioActiveMass = i == 0;

            formEntity.classList.remove('content-modal__form--disable') // le doy visibilidad al card de registrar persona
            formSearch.classList.add('content-modal__buscar--disable') // le quito visibilidad al card de buscar persona

            modalContent.classList.add('content-modal__form'); // le doy dimension de registrar persona
            modalContent.classList.remove('content-modal__buscar'); // le quito la  dimension de buscar persona

            modalGeneral.classList.remove('disable-modal');

        })

    });


    btnCancelBuscar.addEventListener('click', () => {
        console.log('click cancel buscar');
        modalGeneral.classList.add('disable-modal');
        formSearch.reset();
    });

    btnOptionBuscar.forEach((optionBuscar, i) => {




        optionBuscar.addEventListener('click', () => {
            propiestarioActiveSearch = i == 0; //i=0  -> pro

            formSearch.classList.remove('content-modal__buscar--disable') //le doy visibilidad al card de buscar persona
            formEntity.classList.add('content-modal__form--disable') // le quito visibilidad al card de registrar persona

            modalContent.classList.add('content-modal__buscar');  // le doy la dimension de buscar persona
            modalContent.classList.remove('content-modal__form'); // le quito dimension de registrar persona

            modalGeneral.classList.remove('disable-modal');

        })

    });

}
const setEmpresa =(numeroMunicipal) =>{
    const empresas =[
        {
            nombre:'AMTUP',
            min:1,
            max:100
        },
        {
            nombre:'ATOMI',
            min:101,
            max:200
        },
        {
            nombre:'PUCUSANA EXPRESS',
            min:201,
            max:300
        },
        {
            nombre:'BOCANA',
            min:301,
            max:400
        },
        {
            nombre:'SAN JERONIMO',
            min:501,
            max:551
        },
        {
            nombre:'NUEVA VIDA',
            min:601,
            max:650
        },
        {
            nombre:'AMIGOS GEMINIS',
            min:701,
            max:752
        },
        {
            nombre:'RAYOS DEL SUR',
            min:801,
            max:850
        },
        {
            nombre:'LOS METEORITOS',
            min:901,
            max:950
        }
    ]

    const valor = parseInt(numeroMunicipal)

    for (let i = 0; i < empresas.length; i++) {
        const empresa = empresas[i];

        console.log("valor:",valor)
        console.log("empresa:",empresa)
        if(empresa.min <= valor && valor <= empresa.max) {
            return empresa.nombre;
        }

    }
    return null;
}
const setNumeroMunicipal = () => {

    const numeroMunicipal = document.getElementById('numero_municipal');
    const empresaNombre = document.getElementById('empresa');
    numeroMunicipal.addEventListener('keyup', () => {

        let alerts = false;
        const empresaEncontrada = setEmpresa(numeroMunicipal.value, empresaNombre);
        if (empresaEncontrada) {
            empresaNombre.value = empresaEncontrada
        } else {


            if (numeroMunicipal.value.length != 0) {

                alert("Numero no reconocido")
                // alert = true;
            }
        }


        if (numeroMunicipal.value.length == 0) {
            empresaNombre.value = '';
        }

    })
}

const clearFormEntity = () => {
    const formEntity = document.getElementById("form_entity");
    const btnLimpiar = document.getElementById("btn-limpiar");

    btnLimpiar.addEventListener('click', () => {
        console.log('Limpiar');
        formEntity.reset();
    });
}

const clearFormSearch = () => {
    const formSearch = document.getElementById("form_search");
    const btnLimpiar = document.getElementById("btn-limpiar-search");

    btnLimpiar.addEventListener('click', () => {
        console.log('Limpiar');
        formSearch.reset();
    });
}

const uppercaseInputs = () => {
    const apellidosInput = document.getElementById('apellido_entidad');
    const nombresInput = document.getElementById('nombre_entidad');
    const direccionInput = document.getElementById('direccion_entidad');

    apellidosInput.addEventListener('input', function () {
        this.value = this.value.toUpperCase();
    });
    nombresInput.addEventListener('input', function () {
        this.value = this.value.toUpperCase();
    });
    direccionInput.addEventListener('input', function () {
        this.value = this.value.toUpperCase();
    });

}

const disableTenico = () => {

    const Inspections = [
        {
            estado: document.getElementById('estado_inspeccion'),
            emision: document.getElementById('fecha_inspeccion_emision'),
            caducidad: document.getElementById('fecha_inspeccion_caducidad'),
            numero: document.getElementById('numero_inspeccion_vehicular')
        },
        {
            estado: document.getElementById('estado_credencial'),
            emision: document.getElementById('fecha_credencial_emision'),
            caducidad: document.getElementById('fecha_credencial_caducidad'),
            numero: document.getElementById('numero_credencial')
        },
        {
            estado: document.getElementById('estado_seguridad_vial'),
            emision: document.getElementById('fecha_seguridad_vial_emision'),
            caducidad: document.getElementById('fecha_seguridad_vial_caducidad'),
            numero: document.getElementById('numero_seguridad_vial')
        },
        {
            estado: document.getElementById('estado_soat'),
            emision: document.getElementById('fecha_soat_emision'),
            caducidad: document.getElementById('fecha_soat_caducidad'),
            numero: document.getElementById('numero_soat')
        },
    ];

    Inspections.forEach(inspection => {
        inspection.estado.addEventListener('change', e => {
            if (inspection.estado.value == 'Ninguno') {
                inspection.emision.disabled = true;
                inspection.caducidad.disabled = true;
                inspection.numero.disabled = true;
            } else {
                inspection.emision.disabled = false;
                inspection.caducidad.disabled = false;
                inspection.numero.disabled = false;
            }
        });
    });

}

const autoCompleteState = () => {
    const inputsEstado = [
        document.getElementById('numero_inspeccion_vehicular'),
        document.getElementById('numero_credencial'),
        document.getElementById('numero_seguridad_vial'),
        document.getElementById('numero_soat'),

    ];

    inputsEstado.forEach(function (input) {
        console.log(input.id)
        input.addEventListener('blur', () => {
            console.log(input.id)
            input.value = input.value.toString().padStart(5, '0');
        });
    });
}

const stateEntity = () => {
    nameChofer.disabled = true;
    namePropietario.disabled = true;
    checkChofer.addEventListener('change', (e) => {
        if (e.target.checked) {
            nameChofer.value = namePropietario.value;
            idChofer.value = idPropietario.value;
        } else {
            nameChofer.value = '';
        }
    })
}

const searchEntity = () => {
    const getPerson = (param) => {


        axios.get(`/buscar-entidad/${param}`)
            .then(response => {
                console.log('person:', response.data);
                if (response.data) {
                    const { id, nombres, apellidos } = response.data;
                    if (propiestarioActiveSearch) {
                        namePropietario.value = `${apellidos}, ${nombres}`;
                        idPropietario.value = id;
                    } else {
                        nameChofer.value = `${apellidos}, ${nombres}`;
                        idChofer.value = id;
                    }
                } else {
                    if (propiestarioActiveSearch) {
                        namePropietario.value = 'No se encontró información';
                    } else {
                        nameChofer.value = 'No se encontró información';
                    }
                }
                formSearch.reset();
            }).catch(error => {
                console.log("error axios ", error);
                Swal.fire({
                    title: 'Error de conexion',
                    text: 'Ha ocurrido un error al procesar la peticion.',
                    icon: 'error',
                    timer: 3000,
                    returnFocus: false
                }).then(() => {
                    //window.location.href = '/iniciar-sesion';
                    Swal.close();
                });
            });

    }
    const modalGeneral = document.getElementById('modal_general');
    const formSearch = document.getElementById('form_search');
    formSearch.addEventListener('submit', (e) => {
        e.preventDefault();
        modalGeneral.classList.add('disable-modal');
        namePropietario.placeholder = 'cargando...';
        console.log('nombreEntidadBuscar.value', nombreEntidadBuscar.value);

        getPerson(nombreEntidadBuscar.value);

    })
}

const registerEntity = () => {
    const sendEntity = (entity) => {
        console.log("[entity] :", entity);
        axios.post('/registrar-entidad', entity).then(response => {
            if (response.data) {
                const { id_entidad, nombres, apellidos } = response.data;
                if (propiestarioActiveMass) {
                    namePropietario.value = `${apellidos}, ${nombres}`;
                    idPropietario.value = id_entidad;
                } else {
                    nameChofer.value = `${apellidos}, ${nombres}`;
                    idChofer.value = id_entidad;
                }
            }
            formEntity.reset();
        }).catch(error => {
            console.log("[error]", error);
            Swal.fire({
                title: 'Error de conexion',
                text: 'Ha ocurrido un error al procesar la peticion.',
                icon: 'error',
                timer: 3000,
                returnFocus: false
            }).then(() => {
                //window.location.href = '/iniciar-sesion';
                Swal.close();
            });
        });
    }


    const formEntity = document.getElementById('form_entity');
    formEntity.addEventListener('submit', (e) => {
        e.preventDefault();
        modalGeneral.classList.add('disable-modal');
        const formData = new FormData(formEntity);
        const entity = Object.fromEntries(formData);
        console.log("[entity] Z==>:", entity)
        sendEntity(entity);

    })
}

const registerVehiculo = () => {
    const formVehiculo = document.getElementById('form-vehiculo');
    const checkboxConfirmacion = document.getElementById('confirmacion-vehiculo');
    formVehiculo.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(formVehiculo);
        const vehiculo = Object.fromEntries(formData);
        console.log('checkboxConfirmacion.checked :', checkboxConfirmacion.checked)
        if (checkboxConfirmacion.checked) {
            axios.post('/registrar-vehiculo', vehiculo).then(response => {
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
                    //window.location.href = '/iniciar-sesion';
                    Swal.close();
                });
            });
        } else {
            Swal.fire({
                title: 'Formulario Incorrecto!',
                text: 'Completa de correctamente el formulario',
                icon: 'warning',
                timer: 3000,
                returnFocus: false
            }).then(() => {
                //window.location.href = '/iniciar-sesion';
                Swal.close();
            });
        }


    });

}

const listaVehiculos = () => {
    const table = document.getElementById('lista-vehiculos');

    axios.get('/consulta-vehicular/lista')
        .then(response => {
            const data = response.data;
            console.log("response.data :", response.data)
            const dataTable = new DataTable(table, {
                data: data,
                columns: [
                    { data: 'placa'},
                    { data: 'numero_municipal'},
                    { data: 'empresa'},
                    { data: 'propietario'},
                    { data: 'chofer'},
                    {
                        data: null,
                        render: function (data) {
                            return `
                                <div class="actions">
                                <div class="padding-icon icon-show">
                                    <div class="actions-icon" style="background-image: url(${icono_ojo_visor_url});"></div>
                                </div>
                                <div class="padding-icon icon-editar">
                                    <div class="actions-icon" style="background-image: url(${icono_mas_url});"></div>
                                </div>
                                <div class="padding-icon icon-delete">
                                    <div class="actions-icon" style="background-image: url(${icono_eliminar_url});"></div>
                                </div>
                                </div>
                            `;
                        }
                    }
                ],
                pageLength: 5,
                lengthMenu: [
                    [5, 10, 20, -1],
                    [5, 10, 20, 'Todos']
                ],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "zeroRecords": "No se encontraron resultados en su busqueda",
                    "searchPlaceholder": "   Buscar Vehiculos",
                    "info": "Mostrando desde _START_ al _END_ de un total de  _TOTAL_ vehiculos",
                    "infoEmpty": "No existen registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                },
                responsive: true
            });

        })
        .catch(error => {
            console.error('Error al obtener los datos:', error);
        });
}



mainVehiculo();
// Lista de vehiculos
export {listaVehiculos};


//MAL HECHO MOMENTANEAMENTE

// const getVehiculo = (param) => {

//     const numeroMunicipal_c = document.getElementById('numero_municipal_consulta');
//     const empresa_c = document.getElementById('empresa_consulta');
//     const placa_c = document.getElementById('placa_consulta');
//     const name_propietario_c = document.getElementById('name_propietario_consulta');
//     const name_chofer_c = document.getElementById('name_chofer_consulta');
//     const estado_inspeccion_c = document.getElementById('estado_inspeccion_consulta');
//     const fecha_inspeccion_c = document.getElementById('fecha_inspeccion_consulta');
//     const estado_credencial_c = document.getElementById('estado_credencial_consulta');
//     const fecha_credencial_c = document.getElementById('fecha_credencial_consulta');
//     const curso_vial_c = document.getElementById('curso_vial_consulta');
//     const estado_consulta_c = document.getElementById('estado_consulta');

//     axios.get(`/buscar-vehiculo/${param}`)
//         .then(response => {
//             console.log('vehiculo:', response.data);
//             if (response.data) {
//                 // valueVehiculo.innerHTML= listarAtributos(response.data);
//                 const vehiculo = response.data;
//                 numeroMunicipal_c.textContent = vehiculo.numero_municipal;
//                 empresa_c.textContent = vehiculo.empresa;
//                 placa_c.textContent = vehiculo.placa;
//                 name_propietario_c.textContent = vehiculo.nombre_propietario;
//                 name_chofer_c.textContent = vehiculo.nombre_chofer;
//                 estado_inspeccion_c.textContent = vehiculo.estado_inspeccion;
//                 fecha_inspeccion_c.textContent = vehiculo.fecha_inspeccion;
//                 estado_credencial_c.textContent = vehiculo.estado_credencial;
//                 fecha_credencial_c.textContent = vehiculo.fecha_credencial;
//                 curso_vial_c.textContent = vehiculo.curso_vial;
//                 estado_consulta_c.textContent = vehiculo.estado;
//                 consultaSinResultados.classList.add('vista-sin-resultados--desactive');
//                 consultaConResultados.classList.remove('seccion-resultado-vehiculo--desactive');

//             } else {
//                 // valueVehiculo.innerHTML = "No se encontro informacion vehicular",
//                 consultaConResultados.classList.add('seccion-resultado-vehiculo--desactive');
//                 consultaSinResultados.classList.remove('vista-sin-resultados--desactive');

//             }
//             console.log('end');
//         }).catch(error => {
//             console.log("error axios", error)
//         });

// }

// const inputBusqueda = document.getElementById('input-busqueda-placa');
// const consultaSinResultados = document.getElementById('sin_resultados');
// const consultaConResultados = document.getElementById('con_resultados');

// inputBusqueda.addEventListener('keyup', (event) => {
//     if (event.key === 13 || event.key === 'Enter') {
//         console.log("placa ", event.target.value);
//         getVehiculo(event.target.value);
//     }
// });

// formSearchVehiculo.addEventListener('submit', (e) => {
//     e.preventDefault();
//     // // modalGeneral.classList.add('disable-modal');
//     // const formData = new FormData(formSearchVehiculo);
//     // const { placa } = Object.fromEntries(formData);
//     // getVehiculo(placa);

// })









