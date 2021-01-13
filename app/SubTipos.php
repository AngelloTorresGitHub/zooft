<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubTipos extends Model
{
    protected $table = 'sub_tipos';
    protected $fillable = ['descripcion', 'id_nivel', 'id_departamento'];

    public function niveles() {
        return $this->hasMany(Niveles::class);
    }

    public function departamentos() {
        return $this->hasMany(Departamentos::class);
    }
}
