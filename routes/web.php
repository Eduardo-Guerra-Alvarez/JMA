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
    return view('welcome');
});

//recibira una peticion y retornara esto. Si escribo en el navegador localhost:8000/info enviara este mensaje
Route::get('/info', function(){
	//return "Hola, Informacion del Sistema";
	return view('paginas/info'); //al usar view asume que esta dentro de resources/view para no poner extencion
	//return view('paginas.info'); tambien se puede con un punto 
});


Route::get('/contacto', function () {
    return view('paginas.contacto');
});