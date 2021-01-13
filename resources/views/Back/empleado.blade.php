@extends('Back.layoutBack')

@section('content')

<h3>Incidencias generadas en tu zona</h3>

<hr class="bg-light">

<table id="empleado" class="table table-striped dt-responsive nowrap empleado">
    <thead>
        <tr>
            <th>#</th>
            <th>editar</th>
            <th>estado</th>
            <th>descripción</th>
            <th>nivel</th>
            <th>animal</th>
            <th>observaciones</th>
            <th>fecha de creacion</th>         
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th>#</th>
            <th>editar</th>
            <th>estado</th>
            <th>descripción</th>
            <th>nivel</th>
            <th>animal</th>
            <th>observaciones</th>
            <th>fecha de creacion</th>
    </tfoot>
</table>


{{-- Modal --}}
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-dark" id="editarModalLabel">editar estado de incidencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="form-group col-sm-12">
                    <label for="idModal" class=" text-dark"># incidencia</label>
                    <input class="form-control idModal" type="text" name="idModal" disabled>
                </div>

                <div class="form-group col-sm-12">
                    <select name="estadoModal" id="estadoModal" class="custom-select estadoModal">
                        <option value="">seleccione</option>
                        <option value="1">Generado</option>
                        <option value="2">Proceso</option>
                        <option value="3">Finalizado</option>
                    </select>
                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary save" data-dismiss="modal">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

<script src="{{ asset('js/Back/dataTableEmpleado.js') }}"></script>
<script src="{{ asset('js/Back/empleado.js') }}"></script>

@endsection