import axios from "axios";
import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive-dt';
import 'datatables.net-dt/css/jquery.dataTables.css';
import 'datatables.net-responsive-dt/css/responsive.dataTables.css';

const listaPagos = () => {
    const table = document.getElementById('lista-pagos');

    axios.get('/pagos/lista')
        .then(response => {

            const data = response.data;
            console.log("response.data :", response.data);
            const dataTable = new DataTable(table, {
                data: data,
                columns: [
                    { data: 'id' },
                    { data: 'id_entidad' },
                    { data: 'placa' },
                    { data: 'fecha' },
                    { data: 'observacion'},
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

export { listaPagos };