<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function info(){
    	return view('paginas/info');
    }

    public function contacto(){
    	return view('paginas.contacto');
    }
    
    public function bienvenida($nombre = null, $apellido = null){
    	return view('paginas/bienvenida', compact('nombre', 'apellido')) 
		-> with(['nombre_completo' => $nombre . ' ' . $apellido]);
    }
    public function equipo(){
        return view('paginas.equipo');
    }
}
