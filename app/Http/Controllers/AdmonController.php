<?php

namespace App\Http\Controllers;

use AddIdEmpleadoToIncidencias;
use App\Empleados;
use App\User;
use Yajra\DataTables\Contracts\DataTable;

use Illuminate\Http\Request;

class AdmonController extends Controller
{
/* --------------------------------------------------------------- */    
    /* Genera la consulta para mostrar en la dataTable y crea el archivo JSON */    
    public function dataTableAdmon()    
    {
        $empleados = Empleados::all();

        return \DataTables::of($empleados)->make(true);
    }
/* --------------------------------------------------------------- */    
    /* Genera nuevo empleado y rol */ 
    public function newEmpleado() {
        $datos = request()->validate([
            'dniModal' => 'required|max:10',
            'emailModal' => 'required|email',  // email para la mandar correo electrónico
            'nombreModal' => 'required',
            'apellidoModal' => 'required',
            'zonaModal' => 'required',
            'departamentoModal' => 'required',
            'loginModal' => 'required|email', // email de la tabla Users
            'passwdModal' => 'required|min:6',

            /* 'dniModal' => ['required', 'max:10'],
            'emailModal' => ['required', 'email'],  email para la mandar correo electrónico
            'nombreModal' => ['required'],
            'apellidoModal' => ['required'],
            'zonaModal' => ['required'],
            'departamentoModal' => ['required'],
            'loginModal' => ['required', 'email'], email de la tabla Users
            'passwdModal' => ['required', 'min:6'], */
        ]);

        $idDepartamento = (int)$datos['departamentoModal'];
        $idCoordinador = 0;

        switch ($idDepartamento) {
            case 1:
                $idCoordinador = $idDepartamento + 1;
                break;

            case 2:
                $idCoordinador = $idDepartamento + 1;
                break;

            case 3:
                $idCoordinador = $idDepartamento + 1;
                break;

            case 4:
                $idCoordinador = $idDepartamento + 1;
                break;

            case 5:
                $idCoordinador = $idDepartamento + 1;
                break;
            
            default:
                $idCoordinador = $idDepartamento + 1;
                break;
        }

        Empleados::create([
            'dni' => $datos['dniModal'],
            'nombre' => $datos['nombreModal'],
            'apellido' => $datos['apellidoModal'],
            'email_send' => $datos['emailModal'],
            'id_zona' => $datos['zonaModal'],
            'id_departamento' => $idDepartamento,
            'id_coordinador' => $idCoordinador
        ]);

        $newEmpleado = Empleados::all()->last();

        User::create([
            'id_empleado' => $newEmpleado['id'],
            'email' => $datos['loginModal'],
            'password' => bcrypt($datos['passwdModal']),
            'id_rol' => 3,
        ]);
        
        //return redirect()->route('administrador');
        return view('Back.administrador');
    }
}
