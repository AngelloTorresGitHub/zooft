<?php

use App\Niveles;
use Illuminate\Database\Seeder;

class NivelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Niveles::create([
            'id' => 'BJO',
            'nombre' => 'Bajo'
        ]);

        Niveles::create([
            'id' => 'MDO',
            'nombre' => 'Medio'
        ]);

        Niveles::create([
            'id' => 'ALT',
            'nombre' => 'Alto'
        ]);
    }
}
