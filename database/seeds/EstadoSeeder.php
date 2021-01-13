<?php

use App\Estados;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estados::create([
            'nombre' => 'Generado',           
        ]);

        Estados::create([
            'nombre' => 'Proceso',           
        ]);

        Estados::create([
            'nombre' => 'Finalizado',           
        ]);
    }
}
