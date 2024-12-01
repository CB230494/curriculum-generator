<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CurriculumController extends Controller
{
    // Mostrar formulario para crear un currículum
    public function create()
    {
        return view('curricula.create');
    }

    // Guardar currículum en la base de datos
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'perfil_profesional' => 'required',
            'habilidades' => 'required',
            'experiencia_laboral' => 'required',
            'educacion' => 'required',
        ]);
    
        // Guardar en la base de datos
        $curriculum = Curriculum::create($validated);
    
        // Generar el PDF
        $pdf = Pdf::loadView('curricula.pdf', compact('curriculum'));
        $pdf->setPaper('A4', 'portrait'); // Configuración del PDF
    
        // Descargar el PDF automáticamente con un nombre descriptivo
        return $pdf->download('Curriculum_' . str_replace(' ', '_', $curriculum->nombre) . '.pdf');
    }

    // Mostrar un currículum específico
    public function show($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        return view('curricula.show', compact('curriculum'));
    }

    // Mostrar todos los currículums
    public function index()
    {
        $curricula = Curriculum::all();
        return view('curricula.index', compact('curricula'));
    }

    // Eliminar un currículum
    public function destroy($id)
    {
        $curriculum = Curriculum::findOrFail($id);
        $curriculum->delete();

        return redirect()->route('curricula.index')->with('success', 'Currículum eliminado correctamente.');
    }
}
