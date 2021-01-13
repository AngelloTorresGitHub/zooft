<?php

namespace App\Http\Controllers;

use App\Departamentos;
use App\Empleados;
use App\IncidenciasAux;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Contracts\DataTable;

class CoordinadorController extends Controller
{
/* --------------------------------------------------------------- */    
    /* Genera la consulta para mostrar en la dataTable y crea el archivo JSON */
    public function dataTableIncidencias() {   
        $user = Auth::user();
        $coordinador = Empleados::where('id', $user->id)->first();      
        $incidencias = IncidenciasAux::where('id_coordinador', $coordinador->id)->get();     

        return \DataTables::of($incidencias)->make(true);
    }
/* --------------------------------------------------------------- */ 
    public function dataTableEmpleados() {
        $user = Auth::user();
        $coordinador = Empleados::where('id', $user->id)->first();
        $empleados = Empleados::where('id_coordinador', $coordinador->id)
            ->where('id', '<>', $coordinador->id)->get();

        return \DataTables::of($empleados)->make(true);


    }
}