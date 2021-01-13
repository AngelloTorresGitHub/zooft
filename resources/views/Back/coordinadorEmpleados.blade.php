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

<h4>Emplados a cargo</h4>

<hr class="bg-light">

<table id="coordinadorXempleado" class="table table-striped dt-responsive nowrap coordinadorXempleado">
    <thead>
        <tr>
            <th>#</th>
            <th>dni</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>zona</th>            
        </tr>
    </thead>
    
    <tfoot>
        <tr>
            <th>#</th>
            <th>dni</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>zona</th> 
        </tr>
    </tfoot>
</table>

@endsection

@section('js')

<script src="{{ asset('js/Back/dataTableCoordinador.js') }}"></script>
    
@endsection