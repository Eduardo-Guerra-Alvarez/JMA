<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB; //libreria DB
use App\Obra;

class ObrasController extends Controller
{
    public function index(){
    	/* Consulta DB
    	*  $obras = DB::table('obras')->get();
    	*  where('id', '>',1)->
    	*  where('nombre_Obra', 'Bodega Ahorrera')->get();
    	*  return view('obras.obrasIndex', compact('obras'));//regresamos una vista que se encuentra en
        *  la carpeta documentos, se pone un punto o diagonal para seleccionar el formato
    	*  dd($obras);mueve y arroja el resultado
        */
    	//Uso de Modelo
    	$obras = Obra::all();
    	return view('obras.obrasIndex', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obras.obrasForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dep = new Obra();
        $dep->nombre_Obra = $request->nombre_Obra;
        $dep->lugar_Obra = $request->lugar_Obra;
        $dep->fecha_inicio = $request->fecha_inicio;
        $dep->fecha_termino = $request->fecha_termino;
        $dep->save();

        return redirect()->route('obras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function show(Obra $obra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $Obra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        //
    }
}
