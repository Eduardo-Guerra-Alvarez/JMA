<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
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
    public function index()
    {
        $departamentos = Departamento::paginate(5);
        return view('departamentos.departamentoIndex', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.departamentoForm');
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
            'email' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        /*
        $dep = new Departamento();
        $dep->nombre = $request->nombre;
        $dep->email = $request->email;
        $dep->password = $request->password;
        $dep->save();
        */
        Departamento::create($request->all());
        return redirect()->route('departamentos.index')
        ->with([
                'agregado' => 'Departamento agregado',
                'alert-class' => 'alert-info',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        return view('departamentos.departamentoForm', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        $departamento->update($request->all());
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        //
    }
}
