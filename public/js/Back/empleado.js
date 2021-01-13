$(document).ready(function () {
    let row = "";

    /* Carga el Modal con los datos de la tabla */
    $('body').on("click", ".btn-editar", function () {
        row = $(this).parents('tr');
        let seleccionado = row.find('.estadoTable').text();
        $('.idModal').val(row.attr('id'));
        $('.estadoModal').val(getSelect(seleccionado));
    });

    /* Guarda los datos en la DB y actualiza la tabla con los nuevos datos */
    $('body').on("click", ".save", function () {

        $.ajax({
            type: 'POST',
            url: '/editar',
            data: {
                '_token' : $('meta[name="csrf-token"]').attr('content'),
                'id' : $('.idModal').val(),
                'estado' : $('.estadoModal').val(),                
            },                                    
            success: function (response) {                
                let newIncidencia = JSON.parse(response);
                /* Verifica si la actualización a funcionado */
                if (newIncidencia !== 'false') {
                                        
                    row.find('.estadoTable').text(newIncidencia.estado);

                    alert('Actualización exitosa');
                } else {
                    alert('ERROR en la actualización');
                }
            },
            error: function () {
                alert('ERROR en la actualización');
            }
        });
    })

    function getSelect(seleccionado) {
        let numSeleccionado = '';

        if (seleccionado === 'Generado') {
            numSeleccionado = '1';
        } else if (seleccionado === 'Proceso') {
            numSeleccionado = '2';
        } else if (seleccionado === 'Finalizado') {
            numSeleccionado = '3';
        } else {
            numSeleccionado = '';
        }

        return numSeleccionado;
    }


});