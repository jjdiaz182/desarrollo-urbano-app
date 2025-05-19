<?php

namespace App\Http\Controllers;

use App\Models\Desarrollo;
use App\Models\Empresa;
use Illuminate\Http\Request;

class DesarrolloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Empresa $empresa)
    {
        //
        //dd($empresa);
        $desarrollos = $empresa->desarrollos; // Obtener los desarrollos de la empresa seleccionada
        return view('desarrollos.index', compact('desarrollos', 'empresa'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Empresa $empresa)
    {
        //
        return view('desarrollos.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Empresa $empresa)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'tipo_desarrollo' => 'required|string|max:255',
            'numero_viviendas' => 'required|integer|min:1',
            'tipo_vivienda' => 'required|in:interes social,medio residencial,residencial',
            'pais' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
        ]);

        // Crear desarrollo vinculado a la empresa
        $empresa->desarrollos()->create($request->all());

        return redirect()->route('desarrollos.index', $empresa)
                         ->with('success', 'Desarrollo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Desarrollo $desarrollo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa, Desarrollo $desarrollo)
    {
        //
        return view('desarrollos.edit', compact('empresa', 'desarrollo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa, Desarrollo $desarrollo)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'alias' => 'nullable|string|max:255',
            'tipo_desarrollo' => 'required|string|max:255',
            'numero_viviendas' => 'required|integer|min:1',
            'tipo_vivienda' => 'required|in:interes social,medio residencial,residencial',
            'pais' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
        ]);

        $desarrollo->update($request->all());

        return redirect()->route('desarrollos.index', $empresa)
                         ->with('success', 'Desarrollo actualizado correctamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa, Desarrollo $desarrollo)
    {
        //
        $desarrollo->delete();

        return redirect()->route('desarrollos.index', $empresa)
                         ->with('success', 'Desarrollo eliminado correctamente.');

    }
}
