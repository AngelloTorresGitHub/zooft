<?php

use App\SubTipos;
use Illuminate\Database\Seeder;

class SubTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubTipos::create([
            'descripcion' => 'Papelera llena',
            'id_nivel' => 'BJO',
            'id_departamento' => 1
        ]);

        SubTipos::create([
            'descripcion' => 'Basura en espacio público',
            'id_nivel' => 'BJO',
            'id_departamento' => 1
        ]);

        SubTipos::create([
            'descripcion' => 'Desechos corporales',
            'id_nivel' => 'MDO',
            'id_departamento' => 1
        ]);

        SubTipos::create([
            'descripcion' => 'Inmobiliario',
            'id_nivel' => 'MDO',
            'id_departamento' => 2
        ]);

        SubTipos::create([
            'descripcion' => 'Cercas/Jaulas',
            'id_nivel' => 'MDO',
            'id_departamento' => 2
        ]);

        SubTipos::create([
            'descripcion' => 'Iluminación',
            'id_nivel' => 'BJO',
            'id_departamento' => 2
        ]);

        SubTipos::create([
            'descripcion' => 'Fuentes de agua',
            'id_nivel' => 'MDO',
            'id_departamento' => 2
        ]);
        
        SubTipos::create([
            'descripcion' => 'Objeto extraño en recinto del animal',
            'id_nivel' => 'MDO',
            'id_departamento' => 3
        ]);

        SubTipos::create([
            'descripcion' => 'Comportamiento extraño del animal',
            'id_nivel' => 'ALT',
            'id_departamento' => 3
        ]);
       
        SubTipos::create([
            'descripcion' => 'Comportamiento incívico de visitante',
            'id_nivel' => 'ALT',
            'id_departamento' => 4
        ]);
        
        SubTipos::create([
            'descripcion' => 'Atención sanitaria',
            'id_nivel' => 'ALT',
            'id_departamento' => 5
        ]);
    }
}
