<?php

use App\Animales;
use Illuminate\Database\Seeder;

class AnimalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animales::create([
            'id_zona' => 'A',
            'nombre' => 'loboGris',
            'descripcion' => 'Lobo Gris'
        ]);

        Animales::create([
            'id_zona' => 'A',
            'nombre' => 'linceIberico',
            'descripcion' => 'Lince Ibérico'
        ]);

        Animales::create([
            'id_zona' => 'B',
            'nombre' => 'pandaGigante',
            'descripcion' => 'Panda Gigante'
        ]);

        Animales::create([
            'id_zona' => 'B',
            'nombre' => 'bisonteEuropeo',
            'descripcion' => 'Bisonte Europeo'
        ]);

        Animales::create([
            'id_zona' => 'C',
            'nombre' => 'osoHormiguero',
            'descripcion' => 'Oso Hormiguero'
        ]);

        Animales::create([
            'id_zona' => 'C',
            'nombre' => 'tapirAmazonico',
            'descripcion' => 'Tapir Amazónico'
        ]);

        Animales::create([
            'id_zona' => 'D',
            'nombre' => 'tigreBengala',
            'descripcion' => 'Tigre De Bengala'
        ]);

        Animales::create([
            'id_zona' => 'D',
            'nombre' => 'pinguinoJackass',
            'descripcion' => 'Pinguino de Jackass'
        ]);

        Animales::create([
            'id_zona' => 'E',
            'nombre' => 'tiburonToro',
            'descripcion' => 'Tiburón Toro'
        ]);

        Animales::create([
            'id_zona' => 'E',
            'nombre' => 'ibisSagrado',
            'descripcion' => 'Ibis Sagrado'
        ]);

        Animales::create([
            'id_zona' => 'F',
            'nombre' => 'loroArcoiris',
            'descripcion' => 'Loro Arco Iris'
        ]);

        Animales::create([
            'id_zona' => 'F',
            'nombre' => 'guacamayoRojo',
            'descripcion' => 'Guacamayo Rojo de Alas Verdes'
        ]);

        Animales::create([
            'id_zona' => 'G',
            'nombre' => 'nutriaAmazonas',
            'descripcion' => 'Nutria Gigante del Amazonas'
        ]);

        Animales::create([
            'id_zona' => 'G',
            'nombre' => 'rinoceronteBlanco',
            'descripcion' => 'Rinoceronte Blanco'
        ]);
    }
}
