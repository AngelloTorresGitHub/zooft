$(document).ready(function () {
    $('.empleado').DataTable({  
        processing : true,
        serverSide : true,       
        ajax : '/empleado', 
        rowId : 'id',      
        columns : [
            {data: 'id_incidencias', class: 'idTable'},
            {defaultContent: '<button type="button" class="btn btn-light btn-editar" data-toggle="modal" data-target="#editarModal"><i class="fas fa-edit"></i></button>'},
            {data: 'estado', class: 'estadoTable'},
            {data: 'subTipo', class: 'subTipoTable'},
            {data: 'nivel', class: 'nivelTable'},
            {data: 'animal', class: 'animalTable'},            
            {data: 'observaciones', class: 'observacionesTable'},
            {data: 'fechaCreacion', class: 'fechaCreacionTable'},            
        ],              
        responsive : true,
        autoWidth : false,
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