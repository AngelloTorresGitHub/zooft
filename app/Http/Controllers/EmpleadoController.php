<?php

namespace App\Http\Controllers;

use App\Departamentos;
use App\Empleados;
use App\Incidencias;
use App\IncidenciasAux;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Contracts\DataTable;

class EmpleadoController extends Controller
{
/* --------------------------------------------------------------- */    
    /* Genera la consulta para mostrar en la dataTable y crea el archivo JSON */
    public function dataTableEmpleado() { 
        $user = Auth::user();
        $empleado = Empleados::where('id', $user->id)->first();        
        $incidencias = IncidenciasAux::where('id_empleado', $empleado->id)->get();       

        return \DataTables::of($incidencias)->make(true);
    }
/* --------------------------------------------------------------- */    
    /* Genera la consulta para mostrar en la dataTable y crea el archivo JSON */    
    public function editar(Request $request) {
        $idIncidencia = $request->id;
        $estadoIncidencia = $request->estado;        

        $incidencia = Incidencias::where('id', $idIncidencia)->first();

        if ($incidencia != null) {
            Incidencias::where('id', $idIncidencia)->update([
                'id_estado' => $estadoIncidencia
            ]);

            if ($estadoIncidencia === '1') {
                $estado = 'Generado';
            } else if ($estadoIncidencia === '2') {
                $estado = 'Proceso';
            } else {
                $estado = 'Finalizado';
            }

            IncidenciasAux::where('id', $idIncidencia)->update([
                'id_estado' => $estadoIncidencia,
                'estado' => $estado
            ]);

            $respuesta = json_encode(IncidenciasAux::where('id', $estadoIncidencia)->first());
        } else {
            $respuesta = json_encode('false');
        }

        return $respuesta;
    }
}
