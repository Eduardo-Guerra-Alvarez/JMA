<?php

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
    return view('paginas.welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

//recibira una peticion y retornara esto. Si escribo en el navegador localhost:8000/info enviara este mensaje
Route::get('/info', 'PaginaController@info');
Route::get('/bienvenida/{nombre?}/{apellido?}', 'PaginaController@bienvenida');
Route::get('/contacto', 'PaginaController@contacto')->name('contacto');
Route::get('/desarrolladores', 'PaginaController@equipo')->name('equipo');
Route::get('/obra', 'ObrasController@index')->name('obra.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');// HomeController es la clase @index es la funcion
Route::resource('materiales', 'MaterialController')->parameters(['materiales' => 'material']); //para poder llamar a la variable material y que no lo ponga materiale

/* otra forma de poner las rutas
Route::get('/bienvenida/{nombre?}/{apellido?}', function($nombre = null, $apellido = null){//para mandar un nombre por medio de la URL
	//return $nombre . ' ' . $apellido; //. es para concatenar en php, ? para decir que puede o no recibir el parametro apellido
	return view('paginas/bienvenida', compact('nombre', 'apellido')) // hace lo mismo que con with, es mas practico 
	-> with(['nombre_completo' => $nombre . ' ' . $apellido]);// para pasar parametros de url con with 
});
*/