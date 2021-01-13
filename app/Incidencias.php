<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    protected $table = 'incidencias';
    protected $fillable = ['id_tipo', 'id_subTipo', 'id_animal', 'id_estado', 'id_empleado', 'visitNum', 'observacion'];

    public function tipos() {
        return $this->hasMany(Tipos::class);
    }

    public function subTipos() {
        return $this->hasMany(SubTipos::class);
    }

    public function animals() {
        return $this->hasMany(Animales::class);
    }

    public function estados() {
        return $this->hasMany(Estados::class);
    }

    public function empleados() {
        return $this->hasMany(Empleados::class);
    }
}
