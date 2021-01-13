$(document).ready(function () {
    $('.coordinadorXincidencias').DataTable({ 
        processing : true,
        serverSide : true,
        ajax : '/coordinador',
        rowId : 'id',
        columns : [
            {data: 'id_incidencias', class: 'idTable'},
            {data: 'subTipo', class: 'subTipoTable'},
            {data: 'nivel', class: 'nivelTable'},
            {data: 'animal', class: 'animalTable'},
            {data: 'zona', class: 'zonaTable'},
            {data: 'estado', class: 'estadoTable'},
            {data: 'empleado', class: 'empleadoTable'},
            {data: 'emailEmpleado', class: 'emailTable'},
            {data: 'visitNum', class: 'visitNumTable'},   
            {data: 'observaciones', class: 'observacionesTable'},
            {data: 'fechaCreacion', class: 'fechaCreacionTable'},
            {data: 'fechaUpdate', class: 'fechaUpdateTable'},
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

    $('.coordinadorXempleado').DataTable({        
        processing : true,
        serverSide : true,
        ajax : '/coordinadorEmpleado',
        rowId : 'id',
        columns : [
            {data: 'id', class: 'idTable'},
            {data: 'dni', class: 'dniTable'},
            {data: 'nombre', class: 'nombreTable'},
            {data: 'apellido', class: 'apellidoTable'},
            {data: 'email_send', class: 'email_sendTable'},
            {data: 'id_zona', class: 'id_zonaTable'},            
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