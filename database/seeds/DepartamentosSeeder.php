<?php

use App\Departamentos;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamentos::create([
            'nombre' => 'Limpieza',
        ]);

        Departamentos::create([
            'nombre' => 'Mantenimiento',
        ]);

        Departamentos::create([
            'nombre' => 'Cuidado Animal',
        ]);

        Departamentos::create([
            'nombre' => 'Seguridad',
        ]);

        Departamentos::create([
            'nombre' => 'Sanitarios',
        ]);

        Departamentos::create([
            'nombre' => 'Administración',
        ]);
    }
}
