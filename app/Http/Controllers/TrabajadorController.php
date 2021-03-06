<?php

namespace App\Http\Controllers;

use App\Trabajador;
use App\Departamento;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
        $this->middleware('admin')->only('create', 'store', 'edit' ,'update', 'destroy');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (!empty($request->filtro_nombre)) {
            $trabajadores = Trabajador::where('nombre', 'like', '%'.$request->filtro_nombre.'%')
                ->orderBy('id')
                ->paginate(6);
        } else {
            $trabajadores = Trabajador::paginate(6);
        }



        //$trabajadores = Trabajador::all();

        /*
            Metodo para generar una paginacion, mostraria solo 5 trabajadores
        */
        //$trabajadores = Trabajador::paginate(5); 


        //$departamento = Departamento::find(1); //ENCONTRAR AL TRABAJADOR DEL DEPARTAMENTO 3
        //$trabajadores = $departamento->trabajadores()->get(); //TRAER SU CONSULTA


        return view('trabajadores.trabajadoresIndex', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamento = Departamento::all();
        return view('trabajadores.trabajadoresForm', compact('departamento'));
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
            'nombre' => 'required|max:255',
            'domicilio' => 'required|max:255',
            'email' => 'required|max:255',
            'rfc' => 'required|max:255'
        ]);
        $request->merge(['departamento_id' => $request->departamento_id]);
        Trabajador::create($request->all());

        //$trabajador = new Trabajador([
        //    'nombre' => $request->nombre,
        //    'IDdepartamento' => $request->IDdepartamento,
        //    'domicilio' => $request->domicilio,
        //    'email' => $request->email,
        //    'rfc' => $request->rfc
        //]);
        //$departamento = Departamento::find($request->departamento)
        //$departamento = Departamento::find($request->IDdepartamento);
        //dd($trabajador);
        //$departamento->trabajadores()->save($trabajador);

        //$trabajador = new Trabajador;
        //$trabajador->nombre = $request->nombre;
        //$trabajador->IDdepartamento = $request->IDdepartamento;
        //$trabajador->domicilio = $request->domicilio;
        //$trabajador->email = $request->email;
        //$trabajador->rfc = $request->rfc;
        //$trabajador->save();

        return redirect()->route('trabajadores.index')
        ->with([
                'alerta' => 'trabajador agregado',
                'alert-class' => 'alert-info',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajador $trabajador)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajador $trabajador)
    {
        $departamento = Departamento::all();
        return view('trabajadores.trabajadoresForm', compact('trabajador', 'departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajador $trabajador)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'domicilio' => 'required|max:255',
            'email' => 'required|max:255',
            'rfc' => 'required|max:255'
        ]);
        $trabajador->update($request->all());
        return redirect()->route('trabajadores.index')
        ->with([
                'alerta' => 'Trabajador editado',
                'alert-class' => 'alert-warning',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajador $trabajador)
    {
        $trabajador->delete();
        return redirect()->route('trabajadores.index')
        ->with([
                'alerta' => 'Trabajador eliminado',
                'alert-class' => 'alert-danger',
            ]);
    }
}
