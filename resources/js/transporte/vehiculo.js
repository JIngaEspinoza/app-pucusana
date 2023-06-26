
import { setEmpresa } from "./transporte_LBRY";
import axios from "axios";
const btnCancelEntity = document.getElementById('btn_cancel_entity');
const btnCancelBuscar = document.getElementById('btn_cancel_buscar');
const modalGeneral = document.getElementById('modal_general')
const modalContent = document.getElementById('modal_content');
const btnOptionMas = document.querySelectorAll('.btn-mass')
const btnOptionBuscar = document.querySelectorAll('.btn-buscar')
const numeroMunicipal = document.getElementById('numero_municipal');
const empresaNombre = document.getElementById('empresa');
const estadoInspeccion = document.getElementById('estado_inspeccion');
const fechaInspeccion = document.getElementById('fecha_inspeccion');
const estadoCredencial = document.getElementById('estado_credencial');
const fechaCredencial = document.getElementById('fecha_credencial');
const checkChofer = document.getElementById('check_chofer');
const namePropietario = document.getElementById('name_propietario');
const nameChofer = document.getElementById('name_chofer');

const idPropietario = document.getElementById('id_propietario');
const idChofer = document.getElementById('id_chofer');

const formEntity = document.getElementById('form_entity');
const formSearch = document.getElementById('form_search');
const nombreEntidadBuscar = document.getElementById('nombre_entidad_buscar');

const formSearchVehiculo = document.getElementById('form_search_vehiculo');
const valueVehiculo = document.getElementById('valor_vehiculo');

let propiestarioActiveSearch = false;
let propiestarioActiveMass = false;

btnCancelEntity.addEventListener('click', () => {
    console.log('click cancel')
    modalGeneral.classList.add('disable-modal')
});

btnOptionMas.forEach((optionMas, i) => {
    optionMas.addEventListener('click', () => {
        propiestarioActiveMass = i == 0;

        formEntity.classList.remove('content-modal__form--disable')
        formSearch.classList.add('content-modal__buscar--disable')

        modalContent.classList.add('content-modal__form');
        modalContent.classList.remove('content-modal__buscar');

        modalGeneral.classList.remove('disable-modal');

    })

});

btnCancelBuscar.addEventListener('click', () => {
    console.log('click cancel buscar');
    modalGeneral.classList.add('disable-modal');
});

btnOptionBuscar.forEach((optionBuscar, i) => {




    optionBuscar.addEventListener('click', () => {
        propiestarioActiveSearch = i == 0;

        formSearch.classList.remove('content-modal__buscar--disable')
        formEntity.classList.add('content-modal__form--disable')

        modalContent.classList.add('content-modal__buscar');
        modalContent.classList.remove('content-modal__form');

        modalGeneral.classList.remove('disable-modal');

    })

});


numeroMunicipal.addEventListener('keyup', () => {

    let alerts = false;
    const empresaEncontrada = setEmpresa(numeroMunicipal.value, empresaNombre);
    if (empresaEncontrada) {
        empresaNombre.value = empresaEncontrada
    } else {


        if (numeroMunicipal.value.length != 0) {

            alert("No existessss")
            // alert = true;
        }
    }


    if (numeroMunicipal.value.length == 0) {
        empresaNombre.value = '';
    }
    // if (numeroMunicipal.value.length>3 && !alerts) {
    //     empresaNombre.value='';
    //     alert("No existe")
    // }

})

estadoInspeccion.addEventListener('change', (e) => {
    console.log('change')
    if (e.target.value == 'Aprobado') {
        fechaInspeccion.disabled = false;
    } else {
        fechaInspeccion.disabled = true;
    }
});
estadoCredencial.addEventListener('change', (e) => {
    console.log('change ss')

    if (e.target.value == 'Entregado') {
        fechaCredencial.disabled = false;
    } else {
        fechaCredencial.disabled = true;
    }
})
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




const getPerson = (param) => {


    axios.get(`/buscar-entidad/${param}`)
        .then(response => {
            console.log('person:', response.data);
            if (response.data) {
                const { id_entidad, nombre } = response.data;
                if (propiestarioActiveSearch) {
                    namePropietario.value = nombre;
                    idPropietario.value = id_entidad;
                } else {
                    nameChofer.value = nombre;
                    idChofer.value = id_entidad;
                }
            } else {
                if (propiestarioActiveSearch) {
                    namePropietario.value = 'No se encontró información';
                } else {
                    nameChofer.value = 'No se encontró información';
                }
            }
        }).catch(error => {
            console.log("error axios ",error)
        });

}

formSearch.addEventListener('submit', (e) => {
    e.preventDefault();
    modalGeneral.classList.add('disable-modal');
    namePropietario.placeholder = 'cargando...';
    console.log('nombreEntidadBuscar.value', nombreEntidadBuscar.value);

    getPerson(nombreEntidadBuscar.value);

})

const registerEntity = (entity) => {
    console.log("[entity] :", entity);
    axios.post('/registrar-entidad', entity).then(response => {
        if (response.data) {
            const { id_entidad, nombre } = response.data;
            if (propiestarioActiveMass) {
                namePropietario.value = nombre;
                idPropietario.value = id_entidad;
            } else {
                nameChofer.value = nombre;
                idChofer.value = id_entidad;
            }
        }
    }).catch(error => {
        console.log("[error]", error);
    });
}



formEntity.addEventListener('submit', (e) => {
    e.preventDefault();
    modalGeneral.classList.add('disable-modal');
    const formData = new FormData(formEntity);
    const entity = Object.fromEntries(formData);
    console.log("[entity] Z==>:", entity)
    registerEntity(entity);

})


//MAL HECHO MOMENTANEAMENTE

const getVehiculo = (param) => {

    const numeroMunicipal_c = document.getElementById('numero_municipal_consulta');
    const empresa_c = document.getElementById('empresa_consulta');
    const placa_c = document.getElementById('placa_consulta');
    const name_propietario_c = document.getElementById('name_propietario_consulta');
    const name_chofer_c = document.getElementById('name_chofer_consulta');
    const estado_inspeccion_c = document.getElementById('estado_inspeccion_consulta');
    const fecha_inspeccion_c = document.getElementById('fecha_inspeccion_consulta');
    const estado_credencial_c = document.getElementById('estado_credencial_consulta');
    const fecha_credencial_c = document.getElementById('fecha_credencial_consulta');
    const curso_vial_c = document.getElementById('curso_vial_consulta');
    const estado_consulta_c = document.getElementById('estado_consulta');

    axios.get(`/buscar-vehiculo/${param}`)
        .then(response => {
            console.log('vehiculo:', response.data);
            if (response.data) {
                // valueVehiculo.innerHTML= listarAtributos(response.data);
                const vehiculo = response.data;
                numeroMunicipal_c.textContent =  vehiculo.numero_municipal;
                empresa_c.textContent = vehiculo.empresa;
                placa_c.textContent = vehiculo.placa;
                name_propietario_c.textContent = vehiculo.nombre_propietario;
                name_chofer_c.textContent = vehiculo.nombre_chofer;
                estado_inspeccion_c.textContent = vehiculo.estado_inspeccion;
                fecha_inspeccion_c.textContent = vehiculo.fecha_inspeccion;
                estado_credencial_c.textContent = vehiculo.estado_credencial;
                fecha_credencial_c.textContent = vehiculo.fecha_credencial;
                curso_vial_c.textContent = vehiculo.curso_vial;
                estado_consulta_c.textContent = vehiculo.estado;
                consultaSinResultados.classList.add('vista-sin-resultados--desactive');
                consultaConResultados.classList.remove('seccion-resultado-vehiculo--desactive');

            }else{
                // valueVehiculo.innerHTML = "No se encontro informacion vehicular",
                consultaConResultados.classList.add('seccion-resultado-vehiculo--desactive');
                consultaSinResultados.classList.remove('vista-sin-resultados--desactive');

            }
            console.log('end');
        }).catch(error => {
            console.log("error axios",error)
        });

}
// function listarAtributos(objeto) {
//     var resultado = '<ul>';

//     for (var atributo in objeto) {
//         if (objeto.hasOwnProperty(atributo)) {
//             resultado += '<li><strong>' + atributo + ':</strong> ' + objeto[atributo] + '</li>';
//         }
//     }

//     resultado += '</ul>';

//     return resultado;
// }

const inputBusqueda = document.getElementById('input-busqueda-placa');
const consultaSinResultados = document.getElementById('sin_resultados');
const consultaConResultados = document.getElementById('con_resultados');

inputBusqueda.addEventListener('keyup',(event)=>{
    if (event.key === 13 || event.key === 'Enter') {
        console.log("placa ",event.target.value);
        getVehiculo(event.target.value);
    }
});
formSearchVehiculo.addEventListener('submit', (e) => {
    e.preventDefault();
    // // modalGeneral.classList.add('disable-modal');
    // const formData = new FormData(formSearchVehiculo);
    // const { placa } = Object.fromEntries(formData);
    // getVehiculo(placa);

})

