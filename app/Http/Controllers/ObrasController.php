<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Support\Facades\DB; //libreria DB
use App\Obra;
use App\Trabajador;

class ObrasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
        $this->middleware('admin')->only('create', 'store', 'edit' ,'update', 'destroy');
    }


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
    	//$obras = Obra::all();

        $obras = Obra::paginate(10);
    	return view('obras.obrasIndex', compact('obras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trabajadores = Trabajador::all();
        return view('obras.obrasForm', compact('trabajadores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre_Obra' => 'required|max:255',
            'lugar_Obra' => 'required|max:255',
            'fecha_inicio' => 'required|max:255',
            'fecha_termino' => 'required|max:255'
        ]);
        
        $obra = Obra::create($request->except('trabajadores_id'));
        $obra->trabajadores()->attach($request->trabajadores_id);

        /*$dep = new Obra();
        $dep->nombre_Obra = $request->nombre_Obra;
        $dep->lugar_Obra = $request->lugar_Obra;
        $dep->fecha_inicio = $request->fecha_inicio;
        $dep->fecha_termino = $request->fecha_termino;
        $dep->save();*/

        return redirect()->route('obras.index')
        ->with([
                'alerta' => 'Obra agregada',
                'alert-class' => 'alert-info',
            ]);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function show(Obra $obra)
    {
        return view('obras.obrasShow', compact('obra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function edit(Obra $obra)
    {
        if (Gate::denies('editar-obra', $obra)) {
            return redirect()->back()
            ->with(['mensaje' => 'No es tu obra']);
        }
        $trabajadores = Trabajador::all();
        return view('obras.obrasForm', compact('obra', 'trabajadores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
    {
        $request->validate([
            'nombre_Obra' => 'required|max:255',
            'lugar_Obra' => 'required|max:255',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required'
        ]);
        
        //Actualiza la obra
        $obra->update($request->except('trabajadores_id'));

        //sincroniza los trabajadores relacionados con la obra
        $obra->trabajadores()->sync($request->trabajadores_id);

        return redirect()->route('obras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obra  $Obra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obra $obra)
    {
        $obra->trabajadores()->detach(); //de este modelo con esta relacion quita todas las relaciones
        $obra->delete();
        return redirect()->route('obras.index')
        ->with([
                'alerta' => 'Obra eliminada',
                'alert-class' => 'alert-danger',
            ]);;

    }
    public function eliminaTrabajador(Request $request, Obra $obra)
    {
        $obra->trabajadores()->detach($request->trabajador_id);
        return redirect()->route('obras.show', $obra->id)
        ->with([
                'alerta' => 'Trabajador eliminado',
                'alert-class' => 'alert-danger',
            ]);;
    }
}
