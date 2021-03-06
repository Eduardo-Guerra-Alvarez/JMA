<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('admin')->only('create', 'store', 'edit' ,'update', 'destroy', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$materiales = Material::all();
        $materiales = Material::paginate(10);
        return view('materiales.materialIndex', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiales.materialForm');
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
            'precio' => 'required|min:1',
            'cantidad' => 'required|min:1'
        ]);
        /*
        $dep = new Material();
        $dep->nombre = $request->input('nombre');
        $dep->precio = $request->precio;
        $dep->cantidad = $request->cantidad;
        $dep->save();
        */
        Material::create($request->all());
        return redirect()->route('materiales.index')
        ->with([
                'agregado' => 'Material agregado',
                'alert-class' => 'alert-info',
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        return view('materiales.materialShow', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('materiales.materialForm', compact('material'));
        //despues se pasa a update
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        /*
        el request trae la informacion que se tenga en el formulario
        material resive como estaba la informacion
        $material->nombre = $request->input('nombre');
        $material->precio = $request->precio;
        $material->cantidad = $request->cantidad;
        $material->save();
        */
        $request->validate([
            'nombre' => 'required|max:255',
            'precio' => 'required|min:1',
            'cantidad' => 'required|min:1'
        ]);
        $material->update($request->all());
        return redirect()->route('materiales.show', $material->id); //retoranr a la pagina de index
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->route('materiales.index')
            ->with([
                'alerta' => 'Material eliminado',
                'alert-class' => 'alert-warning',
            ]);
            //redireccionar a la ruta index
    }
}
