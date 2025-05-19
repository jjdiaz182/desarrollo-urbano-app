<?php

namespace App\Http\Controllers;

use App\Models\ApoderadoLegal;
use App\Models\Empresa;
use Illuminate\Http\Request;

class ApoderadoLegalController extends Controller
{

    // 📌 Listar los apoderados de una empresa
    public function index(Empresa $empresa)
    {
        $apoderados = $empresa->apoderados;
        return view('apoderados.index', compact('empresa', 'apoderados'));
    }

    // 📌 Mostrar formulario para crear un apoderado legal
    public function create(Empresa $empresa)
    {
        return view('apoderados.create', compact('empresa'));
    }

    // 📌 Guardar un nuevo apoderado legal
    public function store(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'sexo' => 'required|in:Masculino,Femenino,Otro',
            'rfc' => 'required|string|max:13|unique:apoderado_legals',
            'curp' => 'required|string|max:18|unique:apoderado_legals',
            'prefijo' => 'nullable|string|max:10',
            'titulo' => 'nullable|string|max:50',
            'cedula' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|email|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable|string|max:500',
        ]);

        $empresa->apoderados()->create($request->all());

        return redirect()->route('apoderados.index', $empresa)
                         ->with('success', 'Apoderado Legal creado correctamente.');
    }

    // 📌 Editar un apoderado legal
    public function edit(Empresa $empresa, ApoderadoLegal $apoderado)
    {
        return view('apoderados.edit', compact('empresa', 'apoderado'));
    }

    // 📌 Actualizar un apoderado legal
    public function update(Request $request, Empresa $empresa, ApoderadoLegal $apoderado)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'sexo' => 'required|in:Masculino,Femenino,Otro',
            'rfc' => 'required|string|max:13|unique:apoderado_legals,rfc,' . $apoderado->id,
            'curp' => 'required|string|max:18|unique:apoderado_legals,curp,' . $apoderado->id,
            'prefijo' => 'nullable|string|max:10',
            'titulo' => 'nullable|string|max:50',
            'cedula' => 'nullable|string|max:20',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|email|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable|string|max:500',
        ]);

        $apoderado->update($request->all());

        return redirect()->route('apoderados.index', $empresa)
                         ->with('success', 'Apoderado Legal actualizado correctamente.');
    }

    // 📌 Eliminar un apoderado legal
    public function destroy(Empresa $empresa, ApoderadoLegal $apoderado)
    {
        $apoderado->delete();

        return redirect()->route('apoderados.index', $empresa)
                         ->with('success', 'Apoderado Legal eliminado correctamente.');
    }

}
