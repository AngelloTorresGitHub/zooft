<?php

use App\Tipos;
use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipos::create([
            'nombre' => 'Basura/Suciedad'
        ]);

        Tipos::create([
            'nombre' => 'Infraestructura Dañada/Defectuosa'
        ]);

        Tipos::create([
            'nombre' => 'Animales'
        ]);

        Tipos::create([
            'nombre' => 'Visitantes'
        ]);
    }
}
