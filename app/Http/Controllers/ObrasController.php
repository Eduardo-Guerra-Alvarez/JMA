<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB; //libreria DB
use App\Obra;

class ObrasController extends Controller
{
    public function index(){
    	/*Consulta DB
    	$obras = DB::table('obras')->get();
    	//where('id', '>',1)->
    	//where('nombre_Obra', 'Bodega Ahorrera')->get();
    	return view('obras.obrasIndex', compact('obras'));//regresamos una vista que se encuentra en la carpeta documentos, se pone un punto o diagonal para seleccionar el formato
    	*/
    	//dd($obras);mueve y arroja el resultado

    	//Uso de Modelo
    	$obras = Obra::all();
    	return view('obras.obrasIndex', compact('obras'));
    }
}
