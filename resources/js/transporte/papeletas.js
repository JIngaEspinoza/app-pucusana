import axios from "axios";
import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive-dt';
import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net-responsive-dt/css/responsive.dataTables.css';

const offenderSelect = document.getElementById("offenderSelect");

axios.get('/obtener-offenders')
    .then(response => {
        const data = response.data;
        // Itera sobre los datos y agrega las opciones al select
        data.forEach(offender => {
            const option = document.createElement("option");
            option.value = offender.id;
            option.text = offender.numero_documento;
            offenderSelect.appendChild(option);
            $('#offenderSelect').select2();

        });
    })
    .catch(error => {
        console.error('Error al obtener los datos de Offender:', error);
    });

const infractionSelect = document.getElementById("infractionSelect");

// Realiza una solicitud GET al servidor para obtener los datos de "Infracción"
axios.get('/obtener-infracciones')
    .then(response => {
        const data = response.data;
        // Itera sobre los datos y agrega las opciones al select
        data.forEach(infraction => {
            const option = document.createElement("option");
            option.value = infraction.id;
            option.text = infraction.cod;
            infractionSelect.appendChild(option);
        });
    })
    .catch(error => {
        console.error('Error al obtener los datos de Infracción:', error);
    });

const listaPapeletas = () => {
    const table = document.getElementById('lista-papeletas');

    axios.get('/papeletas/lista')
        .then(response => {

            const data = response.data;
            console.log("response.data :", response.data);
            const dataTable = new DataTable(table, {
                data: data,
                columns: [
                    { data: 'id_offender' },
                    { data: 'direccion' },
                    { data: 'placa' },
                ],
                pageLength: 5,
                // columnDefs: [
                //     { "targets": [0], "visible": false, "searchable": true },
                // ],
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "zeroRecords": "No se encontraron resultados en su busqueda",
                    "searchPlaceholder": "   Buscar Papeletas",
                    "info": "Mostrando desde _START_ al _END_ de un total de  _TOTAL_ papeletas",
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
            console.error('Error al obtener los datos de papeletas:', error);
        });
};

// Lista de vehiculos
export { listaPapeletas };