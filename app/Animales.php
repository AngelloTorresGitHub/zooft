<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    protected $table = 'animales';
    protected $fillable = ['id_zona', 'nombre', 'descripcion'];

    public function zona() {
        return $this->hasMany(Zonas::class);
    }
}
