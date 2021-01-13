$(document).ready(function () {
    $('.admon').DataTable({ 
        processing : true,
        serverSide : true,
        ajax : '/administrador',
        rowId : 'id',
        columns : [
            {data: 'id', class: 'idTable'},
            {data: 'dni', class: 'dniTable'},
            {data: 'nombre', class: 'subTipoTable'},
            {data: 'apellido', class: 'nivelTable'},
            {data: 'email_send', class: 'animalTable'},
            {data: 'id_zona', class: 'zonaTable'},
            {data: 'id_departamento', class: 'estadoTable'},
            {data: 'id_coordinador', class: 'empleadoTable'},
        ],
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar " + 
                          `<select class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="-1">All</option>
                            </select>` + 
                          " registros por página",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }        
    });
});