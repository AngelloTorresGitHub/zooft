<?php

use App\Zonas;
use Illuminate\Database\Seeder;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zonas::create([
            'id' => 'A',
            'descripcion' => 'Descripción Zona',
        ]);

        Zonas::create([
            'id' => 'B',
            'descripcion' => 'Descripción Zona',
        ]);
        
        Zonas::create([
            'id' => 'C',
            'descripcion' => 'Descripción Zona',
        ]);

        Zonas::create([
            'id' => 'D',
            'descripcion' => 'Descripción Zona',
        ]);

        Zonas::create([
            'id' => 'E',
            'descripcion' => 'Descripción Zona',
        ]);

        Zonas::create([
            'id' => 'F',
            'descripcion' => 'Descripción Zona',
        ]);

        Zonas::create([
            'id' => 'G',
            'descripcion' => 'Descripción Zona',
        ]);

        Zonas::create([
            'id' => 'O',
            'descripcion' => 'Oficinas',
        ]);
    }
}
