<?php

namespace App\Http\Controllers;

use App\Models\ApoderadoLegal;
use App\Models\Desarrollo;
use App\Models\SolicitudVistoBueno;
use Illuminate\Http\Request;

class SolicitudVistoBuenoController extends Controller
{
    public function index(Desarrollo $desarrollo)
    {
        $solicitudes = $desarrollo->solicitudesVistoBueno;
        return view('visto-bueno.index', compact('desarrollo', 'solicitudes'));
    }

    // 📌 Mostrar formulario para crear una nueva solicitud
    public function create(Desarrollo $desarrollo)
    {
        $representantes = ApoderadoLegal::where('empresa_id', $desarrollo->empresa_id)->get();
        return view('visto-bueno.create', compact('desarrollo', 'representantes'));
    }

    // 📌 Guardar una nueva solicitud
    public function store(Request $request, Desarrollo $desarrollo)
    {


        $desarrollo->solicitudesVistoBueno()->create($request->all());

        return redirect()->route('visto-bueno.index', $desarrollo)
                         ->with('success', 'Solicitud de visto bueno creada correctamente.');
    }

    // 📌 Editar una solicitud
    public function edit(Desarrollo $desarrollo, SolicitudVistoBueno $solicitud)
    {
        $representantes = ApoderadoLegal::where('empresa_id', $desarrollo->empresa_id)->get();
        return view('visto-bueno.edit', compact('desarrollo', 'solicitud', 'representantes'));
    }

    // 📌 Actualizar una solicitud de visto bueno
    public function update(Request $request, Desarrollo $desarrollo, SolicitudVistoBueno $solicitud)
    {
        $request->validate([
            'numero_expediente' => 'required|string|max:255|unique:solicitud_visto_buenos,numero_expediente,' . $solicitud->id,
            'representante_legal_id' => 'required|exists:apoderado_legals,id',
            'escrituras_publicas' => 'required|string|max:255',
            'numeros_registros_publicos' => 'required|string|max:255',
        ]);

        $solicitud->update($request->all());

        return redirect()->route('visto-bueno.index', $desarrollo)
                         ->with('success', 'Solicitud de visto bueno actualizada correctamente.');
    }

    // 📌 Eliminar una solicitud de visto bueno
    public function destroy(Desarrollo $desarrollo, SolicitudVistoBueno $solicitud)
    {
        $solicitud->delete();

        return redirect()->route('visto-bueno.index', $desarrollo)
                         ->with('success', 'Solicitud de visto bueno eliminada correctamente.');
    }
}
