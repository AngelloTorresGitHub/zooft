<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['dni', 'nombre', 'apellido', 'email_send', 'id_zona', 'id_departamento', 'id_coordinador'];  

    public function zona() {
        return $this->hasMany(Zonas::class);
    }

    public function departamentos() {
        return $this->hasMany(Departamentos::class);
    }

    public function coordinadores() {
        return $this->belongsTo(Empleados::class);
    }
}
