<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncidenciasAux extends Model
{
    protected $table = 'incidencias_aux';
    protected $fillable = ['id_incidencias', 'id_tipo','tipo', 'id_subTipo', 'subTipo', 'nivel', 'id_animal', 'animal', 'zona', 'id_departamento', 'departamento', 'id_estado', 'estado', 'id_empleado', 'empleado', 'emailEmpleado', 'id_coordinador', 'coordinador', 'emailCoordinador', 'visitNum', 'observaciones', 'fechaCreacion', 'fechaUpdate'];
    
    public function incidencias() {
        return $this->hasMany(Incidencias::class);
    }
}
