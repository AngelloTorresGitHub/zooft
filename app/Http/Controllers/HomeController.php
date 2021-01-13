<?php

namespace App\Http\Controllers;

use App\Animales;
use App\Departamentos;
use App\Empleados;
use App\Estados;
use App\Incidencias;
use App\IncidenciasAux;
use App\SubTipos;
use App\Tipos;
use App\User;
use App\Zonas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->id_rol === 1) {

            return view('Back.administrador');

        } elseif ($user->id_rol === 2) {

            return view('Back.coordinador');

        } elseif ($user->id_rol === 3) {          

            return view('Back.empleado'); 

        } else {

            return view('home');

        }
    }    
}
/* Autentificación con Auth */
    /* https://www.youtube.com/watch?v=pEnO6ch-U4A&ab_channel=Aprendible */
    
/* --------------------------------------------------------------- */
/* SQL - Busca las incidencias del empleado */
/* 
$sql = \DB::select('SELECT 
                            incidencias.id AS id, 
                            tipos.nombre AS tipo,
                            sub_tipos.descripcion AS subTipo,
                            niveles.nombre AS nivel,
                            animales.descripcion AS animal,
                            estados.nombre AS estado,
                            incidencias.visitNum AS visitante,
                            incidencias.observacion AS observacion,
                            incidencias.created_at AS fecha_creacion,
                            incidencias.updated_at AS fecha_modificacion
                    FROM 
                            incidencias, tipos, sub_tipos, niveles, animales, estados, empleados,
                            (SELECT incidencias.id AS id
                                FROM incidencias
                                WHERE incidencias.id_empleado = ?
                                GROUP BY incidencias.id
                            ) AS inciEmpleado
                    WHERE incidencias.id = inciEmpleado.id
                    AND incidencias.id_tipo = tipos.id 
                    AND incidencias.id_subTipo = sub_tipos.id 
                    AND sub_tipos.id_nivel = niveles.id 
                    AND incidencias.id_estado = estados.id
                    AND incidencias.id_animal = animales.id
                    GROUP BY incidencias.id, animales.descripcion', [$empleado->id]);
$incidencias = (object) $sql;
*/