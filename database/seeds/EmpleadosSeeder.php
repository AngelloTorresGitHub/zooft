<?php

use App\Empleados;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Admon */
        Empleados::create([
            'dni' => '11111111O',
            'nombre' => 'Angello',
            'apellido' => 'Torres',
            'email_send' => 'angellotorres@gmail.com',
            'id_zona' => 'O',
            'id_departamento' => 6,
            'id_coordinador' => 1
        ]);

        /* Coordinadores */
        Empleados::create([
            'dni' => '22222222O',
            'nombre' => 'Nom Coord-1',
            'apellido' => 'Apell Limpieza',
            'email_send' => 'angellotorres.edita@gmail.com',
            'id_zona' => 'O',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '33333333O',
            'nombre' => 'Nom Coord-2',
            'apellido' => 'Apell Mantenimiento',
            'email_send' => 'angellotorres.edita@gmail.com',
            'id_zona' => 'O',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '44444444O',
            'nombre' => 'Nom Coord-3',
            'apellido' => 'Apell Animal',
            'email_send' => 'angellotorres.edita@gmail.com',
            'id_zona' => 'O',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '55555555O',
            'nombre' => 'Nom Coord-4',
            'apellido' => 'Apell Seguridad',
            'email_send' => 'angellotorres.edita@gmail.com',
            'id_zona' => 'O',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '66666666O',
            'nombre' => 'Nom Coord-5',
            'apellido' => 'Apell Sanitarios',
            'email_send' => 'angellotorres.edita@gmail.com',
            'id_zona' => 'O',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona A*/
        Empleados::create([
            'dni' => '11111111A',
            'nombre' => 'Nom Emp-A',
            'apellido' => 'Apell Limpieza-A',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'A',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222A',
            'nombre' => 'Nom Emp-A',
            'apellido' => 'Apell Mantenimiento-A',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'A',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333A',
            'nombre' => 'Nom Emp-A',
            'apellido' => 'Apell Animal-A',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'A',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444A',
            'nombre' => 'Nom Emp-A',
            'apellido' => 'Apell Seguridad-A',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'A',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555A',
            'nombre' => 'Nom Emp-A',
            'apellido' => 'Apell Sanitarios-A',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'A',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona A*/
        Empleados::create([
            'dni' => '11111111B',
            'nombre' => 'Nom Emp-B',
            'apellido' => 'Apell Limpieza-B',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'B',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222B',
            'nombre' => 'Nom Emp-B',
            'apellido' => 'Apell Mantenimiento-B',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'B',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333B',
            'nombre' => 'Nom Emp-B',
            'apellido' => 'Apell Animal-B',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'B',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444B',
            'nombre' => 'Nom Emp-B',
            'apellido' => 'Apell Seguridad-B',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'B',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555B',
            'nombre' => 'Nom Emp-B',
            'apellido' => 'Apell Sanitarios-B',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'B',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona C*/
        Empleados::create([
            'dni' => '11111111C',
            'nombre' => 'Nom Emp-C',
            'apellido' => 'Apell Limpieza-C',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'C',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222C',
            'nombre' => 'Nom Emp-C',
            'apellido' => 'Apell Mantenimiento-C',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'C',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333C',
            'nombre' => 'Nom Emp-C',
            'apellido' => 'Apell Animal-C',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'C',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444C',
            'nombre' => 'Nom Emp-C',
            'apellido' => 'Apell Seguridad-C',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'C',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555C',
            'nombre' => 'Nom Emp-C',
            'apellido' => 'Apell Sanitarios-C',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'C',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona D*/
        Empleados::create([
            'dni' => '11111111D',
            'nombre' => 'Nom Emp-D',
            'apellido' => 'Apell Limpieza-D',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'D',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222D',
            'nombre' => 'Nom Emp-D',
            'apellido' => 'Apell Mantenimiento-D',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'D',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333D',
            'nombre' => 'Nom Emp-D',
            'apellido' => 'Apell Animal-D',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'D',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444D',
            'nombre' => 'Nom Emp-D',
            'apellido' => 'Apell Seguridad-D',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'D',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555D',
            'nombre' => 'Nom Emp-D',
            'apellido' => 'Apell Sanitarios-D',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'D',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona E*/
        Empleados::create([
            'dni' => '11111111E',
            'nombre' => 'Nom Emp-E',
            'apellido' => 'Apell Limpieza-E',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'E',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222E',
            'nombre' => 'Nom Emp-E',
            'apellido' => 'Apell Mantenimiento-E',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'E',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333E',
            'nombre' => 'Nom Emp-E',
            'apellido' => 'Apell Animal-E',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'E',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444E',
            'nombre' => 'Nom Emp-E',
            'apellido' => 'Apell Seguridad-E',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'E',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555E',
            'nombre' => 'Nom Emp-E',
            'apellido' => 'Apell Sanitarios-E',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'E',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona F*/
        Empleados::create([
            'dni' => '11111111F',
            'nombre' => 'Nom Emp-F',
            'apellido' => 'Apell Limpieza-F',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'F',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222F',
            'nombre' => 'Nom Emp-F',
            'apellido' => 'Apell Mantenimiento-F',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'F',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333F',
            'nombre' => 'Nom Emp-F',
            'apellido' => 'Apell Animal-F',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'F',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444F',
            'nombre' => 'Nom Emp-F',
            'apellido' => 'Apell Seguridad-F',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'F',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555F',
            'nombre' => 'Nom Emp-F',
            'apellido' => 'Apell Sanitarios-F',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'F',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);

        /* Empleados Zona G*/
        Empleados::create([
            'dni' => '11111111G',
            'nombre' => 'Nom Emp-G',
            'apellido' => 'Apell Limpieza-G',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'G',
            'id_departamento' => 1,
            'id_coordinador' => 2
        ]);

        Empleados::create([
            'dni' => '22222222G',
            'nombre' => 'Nom Emp-G',
            'apellido' => 'Apell Mantenimiento-G',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'G',
            'id_departamento' => 2,
            'id_coordinador' => 3
        ]);

        Empleados::create([
            'dni' => '33333333G',
            'nombre' => 'Nom Emp-G',
            'apellido' => 'Apell Animal-G',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'G',
            'id_departamento' => 3,
            'id_coordinador' => 4
        ]);

        Empleados::create([
            'dni' => '44444444G',
            'nombre' => 'Nom Emp-G',
            'apellido' => 'Apell Seguridad-G',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'G',
            'id_departamento' => 4,
            'id_coordinador' => 5
        ]);

        Empleados::create([
            'dni' => '55555555G',
            'nombre' => 'Nom Emp-G',
            'apellido' => 'Apell Sanitarios-G',
            'email_send' => 'angellot.colonvilla2@gmail.com',
            'id_zona' => 'G',
            'id_departamento' => 5,
            'id_coordinador' => 6
        ]);
    }
}
