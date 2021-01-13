<?php

use App\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'rol' => 'Administrador',
        ]);

        Roles::create([
            'rol' => 'Coordinador',
        ]);

        Roles::create([
            'rol' => 'Empleado',
        ]);
    }
}