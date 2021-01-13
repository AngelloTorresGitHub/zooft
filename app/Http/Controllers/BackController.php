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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Contracts\DataTable;

class BackController extends Controller
{
/* --------------------------------------------------------------- */
    /* Realiza la incidencia */
    public function makeIncidencia () {
        $datos = request();
        $mainIncidencia = $datos['mainIncidencia'];
        $subIncidencia = $datos['subIncidencia'];
        $animal = $this->returnIdAnimal(htmlspecialchars($_COOKIE["zooftRuta"]));

        $DBTipo = Tipos::where('id', $mainIncidencia)->first();
        $DBSubTipo = SubTipos::where('id', $subIncidencia)->first();        
        $DBAnimal = Animales::where('id', $animal)->first();       
        
        $DBEmpleado = Empleados::Where('id_zona' ,$DBAnimal['id_zona'])
                               ->where('id_departamento' ,$DBSubTipo['id_departamento'])->first();
        
        $DBDepartamento = Departamentos::where('id', $DBSubTipo['id_departamento'])->first();

        
        $visitNum = htmlspecialchars($_COOKIE["zooftVisitNum"]);
        
        /* Creación de tabla incidencias */
        Incidencias::create([
            'id_tipo' => $DBTipo['id'],
            'id_subTipo' => $DBSubTipo['id'],
            'id_animal' => $DBAnimal['id'],
            'id_estado' => 1,
            'id_empleado' => $DBEmpleado['id'],
            'visitNum' => $visitNum,
            'observacion' => 'Ninguna'
        ]);

        /* Creación de tabla incidencias_aux */        
        $incidencia = Incidencias::all()->last();
        $coordinador = Empleados::where('id', $DBEmpleado['id_coordinador'])->first();
        $estado = Estados::where('id', $incidencia['id_estado'])->first();

        IncidenciasAux::create([
            'id_incidencias' => $incidencia['id'],
            'id_tipo' => $incidencia['id_tipo'],
            'tipo' => $DBTipo['nombre'],
            'id_subTipo' => $incidencia['id_subTipo'],
            'subTipo' => $DBSubTipo['descripcion'],
            'nivel' => $DBSubTipo['id_nivel'],
            'id_animal' => $incidencia['id_animal'],
            'animal' => $DBAnimal['descripcion'],
            'zona' => $DBAnimal['id_zona'],
            'id_departamento' => $DBSubTipo['id_departamento'],
            'departamento' => $DBDepartamento['nombre'],
            'id_estado' => $incidencia['id_estado'],
            'estado' => $estado['nombre'],
            'id_empleado' => $DBEmpleado['id'],
            'empleado' => $DBEmpleado['nombre'].' '.$DBEmpleado['apellido'],
            'emailEmpleado' => $DBEmpleado['email_send'],
            'id_coordinador'=> $coordinador['id'],
            'coordinador'=> $coordinador['nombre'].' '.$coordinador['apellido'],
            'emailCoordinador'=> $coordinador['email_send'],
            'visitNum' => $incidencia['visitNum'],
            'observaciones' => $incidencia['observacion'],
            'fechaCreacion' => $incidencia['created_at'],
            'fechaUpdate' => $incidencia['updated_at']
        ]);

        $incidenciaAux = IncidenciasAux::all()->last();

        $this->mandarEmail($incidenciaAux);

        return redirect()->route('regresar');
    }
/* --------------------------------------------------------------- */
   /* Función manda un mail al empleado correspondiente */    
   public function mandarEmail(IncidenciasAux $incidenciaAux) {
       $logo = base64_encode(file_get_contents('assets/logoZOOFT.png'));
       $animal = $incidenciaAux['animal'];
       $zona = $incidenciaAux['zona'];
       $email = $incidenciaAux['emailEmpleado'];

       $datos = [
           'logo' => $logo,
           'tipo' => $incidenciaAux['tipo'],
           'subTipo' => $incidenciaAux['subTipo'],
           'nivel' => $incidenciaAux['nivel'],
           'animal' => $incidenciaAux['animal'],
           'zona' => $incidenciaAux['zona'],
           'empleado' => $incidenciaAux['empleado'],
           'emailEmpleado' => $incidenciaAux['emailEmpleado'],
           'fechaCreacion' => $incidenciaAux['fechaCreacion'],
           'coordinador' => $incidenciaAux['coordinador'],
           'emailCoordinador' => $incidenciaAux['emailCoordinador']
       ];

       try {
           Mail::send('emails.sendIncidencia', $datos, function ($message) use($email, $animal, $zona){
               $message->to($email)->subject('Informe de Incidencia. Zona: '.$zona.' Animal: '.$animal.' ');
           });
       } catch (\Exception $e) {
           dd($e->getMessage());
       }

   }
/* --------------------------------------------------------------- */
   /* Función regresa el id del animal */
    public function returnIdAnimal(string $nomAnimal) {
        $idAnimal = Animales::Where('nombre', $nomAnimal)->first();

        return $idAnimal['id'];
    }
/* --------------------------------------------------------------- */
    /* View Login */
    public function login() {
        return view('Back.login');
    }
/* --------------------------------------------------------------- */
    /* View Administrador */
    public function administrador() {
        return view('Back.administrador');
    }
/* --------------------------------------------------------------- */
    /* View Coordinador */
    public function coordinador() {
        return view('Back.coordinador');
    }

    public function coordinadorEmpleados() {
        return view('Back.coordinadorEmpleados');
    }
/* --------------------------------------------------------------- */
    /* View Empleado */
    public function empleado() {        
        return view('Back.empleado');
    }    
}