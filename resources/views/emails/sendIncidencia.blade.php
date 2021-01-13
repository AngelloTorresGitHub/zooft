@extends('emails.layoutEmail')

@section('content')

<table>
    <tr>
        <td>
            <img src="data:image/gif;base64,{{ $logo }}" alt="Logo Zooft" title="Logo Zooft">
        </td>
        <td>
            <h1>INFORME DE INCIDENCIA</h1>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Empleado</h3>
        </td>
        <td>
            <p>{{ $empleado }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Tipo</h3>
        </td>
        <td>
            <p>{{ $tipo }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Descripción</h3>
        </td>
        <td>
            <p>{{ $subTipo }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Nivel</h3>
        </td>
        <td>
            <p>{{ $nivel }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Animal</h3>
        </td>
        <td>
            <p>{{ $animal }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Zona</h3>
        </td>
        <td>
            <p>{{ $zona }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Fecha de Creación</h3>
        </td>
        <td>
            <p>{{ $fechaCreacion }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Coordinador del Departamento</h3>
        </td>
        <td>
            <p>{{ $coordinador }}</p>
        </td>
    </tr>
    <tr>
        <td>
            <h3>Email del coordinador</h3>
        </td>
        <td>
            <p>{{ $emailCoordinador }}</p>
        </td>
    </tr>
    
</table>
    
@endsection