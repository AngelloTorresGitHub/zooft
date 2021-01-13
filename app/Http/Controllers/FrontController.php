<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /* --------------------------------------------------------------- */
    /* View de animales */
    public function bisonteEuropeo() {
        setcookie('zooftRuta', 'bisonteEuropeo', time()+3600);
        return view('Front.animales.bisonteEuropeo');
    }

    public function guacamayoRojo() {
        setcookie('zooftRuta', 'guacamayoRojo', time()+3600);
        return view('Front.animales.guacamayoRojo');
    }

    public function ibisSagrado() {
        setcookie('zooftRuta', 'ibisSagrado', time()+3600);
        return view('Front.animales.ibisSagrado');
    }

    public function linceIberico() {
        setcookie('zooftRuta', 'linceIberico', time()+3600);
        return view('Front.animales.linceIberico');
    }

    public function loboGris() {
        setcookie('zooftRuta', 'loboGris', time()+3600);
        return view('Front.animales.loboGris');
    }

    public function loroArcoiris() {
        setcookie('zooftRuta', 'loroArcoiris', time()+3600);
        return view('Front.animales.loroArcoiris');
    }

    public function nutriaAmazonas() {
        setcookie('zooftRuta', 'nutriaAmazonas', time()+3600);
        return view('Front.animales.nutriaAmazonas');
    }

    public function osoHormiguero() {
        setcookie('zooftRuta', 'osoHormiguero', time()+3600);
        return view('Front.animales.osoHormiguero');
    }

    public function pandaGigante() {
        setcookie('zooftRuta', 'pandaGigante', time()+3600);
        return view('Front.animales.pandaGigante');
    }

    public function pinguinoJackass() {
        setcookie('zooftRuta', 'pinguinoJackass', time()+3600);
        return view('Front.animales.pinguinoJackass');
    }

    public function rinoceronteBlanco() {
        setcookie('zooftRuta', 'rinoceronteBlanco', time()+3600);
        return view('Front.animales.rinoceronteBlanco');
    }

    public function tapirAmazonico() {
        setcookie('zooftRuta', 'tapirAmazonico', time()+3600);
        return view('Front.animales.tapirAmazonico');
    }

    public function tiburonToro() {
        setcookie('zooftRuta', 'tiburonToro', time()+3600);
        return view('Front.animales.tiburonToro');
    }

    public function tigreBengala() {
        setcookie('zooftRuta', 'tigreBengala', time()+3600);
        return view('Front.animales.tigreBengala');
    }

/* --------------------------------------------------------------- */
    /* View de Quienes Somos */
    public function quienesSomos() {
        return view('Front.quienesSomos');
    }

/* --------------------------------------------------------------- */
    /* View de Incidencias */
    public function incidencia() {
        return view('Front.incidencia');
    }

/* --------------------------------------------------------------- */
    /* Función para regresar a la página anterior */
    public function regresar() {
        $zooftRuta = htmlspecialchars($_COOKIE["zooftRuta"]);
        return redirect()->route($zooftRuta);
    }
/* --------------------------------------------------------------- */
}
