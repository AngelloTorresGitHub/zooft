<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TiposSeeder::class);   
        $this->call(EstadoSeeder::class);
        $this->call(ZonasSeeder::class);
        $this->call(NivelesSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(RolesSeeder::class);     
        $this->call(AnimalesSeeder::class);
        $this->call(SubTiposSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
