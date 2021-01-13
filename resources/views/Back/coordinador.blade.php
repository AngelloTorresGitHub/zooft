@extends('Back.layoutBack')

@section('content')

<div class="row justify-content-around">
    <div class="col-sd-4">        
        <form method="POST" action="{{ route('coordinador.empleados') }}">
            {{csrf_field()}}
    
            <button class="btn btn-primary" type="submit">Emplados a cargo</button>
        </form>
    </div>
    <div class="col-sd-4">
        <form method="POST" action="{{ route('coordinador.incidencias') }}">
            {{csrf_field()}}
    
            <button class="btn btn-primary" type="submit">Incidencias generadas</button>
        </form>
    </div>
</div>

<hr class="bg-light">

<h4>Incidencias generadas en tu departamento</h4>

<hr class="bg-light">

<table id="coordinadorXincidencias" class="table table-striped dt-responsive nowrap coordinadorXincidencias">
    <thead>
        <tr>
            <th>#</th>
            <th>descripción</th>
            <th>nivel</th>
            <th>animal</th>
            <th>zona</th>
            <th>estado</th>
            <th>empleado</th>
            <th>email</th>
            <th>visitante</th>
            <th>observaciones</th>
            <th>fecha de creación</th>
            <th>última actualización</th>
        </tr>
    </thead>
    
    <tfoot>
        <tr>
            <th>#</th>
            <th>descripción</th>
            <th>nivel</th>
            <th>animal</th>
            <th>zona</th>
            <th>estado</th>
            <th>empleado</th>
            <th>email</th>
            <th>visitante</th>
            <th>observaciones</th>
            <th>fecha de creación</th>
            <th>última actualización</th>
        </tr>
    </tfoot>
</table>

@endsection

@section('js')

<script src="{{ asset('js/Back/dataTableCoordinador.js') }}"></script>
    
@endsection