<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Admon */
        User::create([
            'id_empleado' => 1,
            'email' => 'angellotorres@gmail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 1,
        ]);
        /* Coordinadores */
        User::create([
            'id_empleado' => 2,
            'email' => 'coordLimpieza@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 2,
        ]);

        User::create([
            'id_empleado' => 3,
            'email' => 'coordMantenimiento@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 2,
        ]);

        User::create([
            'id_empleado' => 4,
            'email' => 'coordAnimal@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 2,
        ]);

        User::create([
            'id_empleado' => 5,
            'email' => 'coordSeguridad@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 2,
        ]);

        User::create([
            'id_empleado' => 6,
            'email' => 'coordSanitarios@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 2,
        ]);
        /* Empleados Zona A*/
        User::create([
            'id_empleado' => 7,
            'email' => 'empleLimpiezaA@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 8,
            'email' => 'empleMantenimientoA@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 9,
            'email' => 'empleAnimalA@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 10,
            'email' => 'empleSeguridadA@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 11,
            'email' => 'empleSanitariosA@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        /* Empleados Zona B*/
        User::create([
            'id_empleado' => 12,
            'email' => 'empleLimpiezaB@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 13,
            'email' => 'empleMantenimientoB@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 14,
            'email' => 'empleAnimalB@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 15,
            'email' => 'empleSeguridadB@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 16,
            'email' => 'empleSanitariosB@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        /* Empleados Zona C*/
        User::create([
            'id_empleado' => 17,
            'email' => 'empleLimpiezaC@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 18,
            'email' => 'empleMantenimientoC@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 19,
            'email' => 'empleAnimalC@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 20,
            'email' => 'empleSeguridadC@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 21,
            'email' => 'empleSanitariosC@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        /* Empleados Zona D*/
        User::create([
            'id_empleado' => 22,
            'email' => 'empleLimpiezaD@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 23,
            'email' => 'empleMantenimientoD@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 24,
            'email' => 'empleAnimalD@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 25,
            'email' => 'empleSeguridadD@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 26,
            'email' => 'empleSanitariosD@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        /* Empleados Zona E*/
        User::create([
            'id_empleado' => 27,
            'email' => 'empleLimpiezaE@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 28,
            'email' => 'empleMantenimientoE@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 29,
            'email' => 'empleAnimalE@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 30,
            'email' => 'empleSeguridadE@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 31,
            'email' => 'empleSanitariosE@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        /* Empleados Zona F*/
        User::create([
            'id_empleado' => 32,
            'email' => 'empleLimpiezaF@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 33,
            'email' => 'empleMantenimientoF@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 34,
            'email' => 'empleAnimalF@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 35,
            'email' => 'empleSeguridadF@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 36,
            'email' => 'empleSanitariosF@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        /* Empleados Zona G*/
        User::create([
            'id_empleado' => 37,
            'email' => 'empleLimpiezaG@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 38,
            'email' => 'empleMantenimientoG@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 39,
            'email' => 'empleAnimalG@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 40,
            'email' => 'empleSeguridadG@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);

        User::create([
            'id_empleado' => 41,
            'email' => 'empleSanitariosG@mail.com',
            'password' => bcrypt('1234'),
            'id_rol' => 3,
        ]);
    }
}
