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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');// HomeController es la clase @index es la funcion
Route::resource('materiales', 'MaterialController')->parameters(['materiales' => 'material']); //para poder llamar a la variable material y que no lo ponga materiale
Route::resource('trabajadores', 'TrabajadorController')->parameters(['trabajadores' => 'trabajador']);
//Se agrega /listado para prevenir duplicidad con ruta para funcionario.store que también utiliza POST
Route::match(['GET', 'POST'], 'trabajadores', 'TrabajadorController@index')->name('trabajadores.index');

Route::resource('departamentos', 'DepartamentoController');

//->middleware('auth'); 	SE USA PARA QUE NO PUEDA ENTRAR A MENOS QUE ESTE REGISTRADO
Route::post('obras/elimina-trabajador/{obra}', 'ObrasController@eliminaTrabajador')->name('obras.eliminaTrabajador');
Route::resource('obras', 'ObrasController');

//Rutas para carga, descarta y eliminación de archivos
Route::resource('archivo', 'ArchivoController', ['except' => ['create', 'edit', 'update']]);


//Rutas para envío de correo electrónico de seguimiento
Route::get('seguimiento/lista-trabajadores', 'MailSeguimientoController@listaTrabajadores');
Route::get('seguimiento/envia-correo/{trabajador}/{obra}', 'MailSeguimientoController@enviaCorreo');



/* otra forma de poner las rutas
Route::get('/bienvenida/{nombre?}/{apellido?}', function($nombre = null, $apellido = null){//para mandar un nombre por medio de la URL
	//return $nombre . ' ' . $apellido; //. es para concatenar en php, ? para decir que puede o no recibir el parametro apellido
	return view('paginas/bienvenida', compact('nombre', 'apellido')) // hace lo mismo que con with, es mas practico 
	-> with(['nombre_completo' => $nombre . ' ' . $apellido]);// para pasar parametros de url con with 
});
*/