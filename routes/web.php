<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect()->route('home');
});

/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* RUTAS DEL FRONT-END */
/* Rutas Animales */
Route::get('/bisonteEuropeo', 'FrontController@bisonteEuropeo')->name('bisonteEuropeo');
Route::get('/guacamayoRojo', 'FrontController@guacamayoRojo')->name('guacamayoRojo');
Route::get('/ibisSagrado', 'FrontController@ibisSagrado')->name('ibisSagrado');
Route::get('/linceIberico', 'FrontController@linceIberico')->name('linceIberico');
Route::get('/loboGris', 'FrontController@loboGris')->name('loboGris');
Route::get('/loroArcoiris', 'FrontController@loroArcoiris')->name('loroArcoiris');
Route::get('/nutriaAmazonas', 'FrontController@nutriaAmazonas')->name('nutriaAmazonas');
Route::get('/osoHormiguero', 'FrontController@osoHormiguero')->name('osoHormiguero');
Route::get('/pandaGigante', 'FrontController@pandaGigante')->name('pandaGigante');
Route::get('/pinguinoJackass', 'FrontController@pinguinoJackass')->name('pinguinoJackass');
Route::get('/rinoceronteBlanco', 'FrontController@rinoceronteBlanco')->name('rinoceronteBlanco');
Route::get('/tapirAmazonico', 'FrontController@tapirAmazonico')->name('tapirAmazonico');
Route::get('/tiburonToro', 'FrontController@tiburonToro')->name('tiburonToro');
Route::get('/tigreBengala', 'FrontController@tigreBengala')->name('tigreBengala');

/* Ruta Quienes Somos */
Route::get('/quienesSomos', 'FrontController@quienesSomos')->name('quienesSomos');

/* Ruta Incidencias */
Route::get('/incidencia', 'FrontController@incidencia')->name('incidencia');

/* Ruta Regresar */
Route::get('/regresar', 'FrontController@regresar')->name('regresar');

/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* ////////////////////////////////////////////////////////////////////////////////////////// */
/* RUTAS DEL BACK-END */
Auth::routes(['register' => false]);
/* Genera la incidencia */
Route::post('/makeIncidencia', 'BackController@makeIncidencia')->name('makeIncidencia');


/* Ruta del Administrador */
Route::get('/administrador', 'BackController@administrador')->name('administrador');
Route::get('/administrador', 'AdmonController@dataTableAdmon')->name('dataTable.administrador');
Route::post('/nuevo', 'AdmonController@newEmpleado')->name('nuevo.empleado');

/* Ruta del Coordinador */
Route::get('/coordinador', 'BackController@coordinador')->name('coordinador.incidencias');
Route::post('/coordinador', 'BackController@coordinador')->name('coordinador.incidencias');
Route::get('/coordinador', 'CoordinadorController@dataTableIncidencias')->name('coordinador.dataTableIncidencias');

Route::get('/coordinadorEmpleado', 'BackController@coordinadorEmpleados')->name('coordinador.empleados');
Route::post('/coordinadorEmpleado', 'BackController@coordinadorEmpleados')->name('coordinador.empleados');
Route::get('/coordinadorEmpleado', 'CoordinadorController@dataTableEmpleados')->name('coordinador.dataTableEmpleados');

/* Ruta del Empleado */
Route::get('/empleado', 'BackController@empleado')->name('empleado');
Route::get('/empleado', 'EmpleadoController@dataTableEmpleado')->name('dataTable.empleado');
Route::post('/editar', 'EmpleadoController@editar')->name('editar.empleado');

/* Controla el Login y redirecciona al usuario correspondiente */
Route::get('/home', 'HomeController@index')->name('home');