<?php

namespace App\Http\Controllers;

use App\Models\Testimonio;
use Illuminate\Http\Request;

class TestimonioController extends Controller
{
    // Muestra el formulario para dejar un testimonio
    public function mostrarFormulario()
    {
        // Retorna la vista del formulario para dejar un testimonio
        return view('pages.dejar_testimonio');
    }

    // Almacena un nuevo testimonio en la base de datos
    public function guardarTestimonio(Request $request)
    {
        // Validación de los datos del formulario de testimonio
        $validatedData = $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'contenido' => 'required|string',
            'calificacion' => 'required|integer|min:1|max:5',
        ]);

        // Crea un nuevo testimonio con los datos validados
        Testimonio::create($validatedData);

        // Redirige al formulario con un mensaje de agradecimiento
        return redirect()->back()->with('success', 'Gracias por tu testimonio.');
    }

    // Lista todos los testimonios con su calificación
    public function listarTestimonios()
    {
        // Obtiene todos los testimonios de la base de datos
        $testimonios = Testimonio::all();
        
        // Retorna la vista con la lista de testimonios
        return view('pages.testimonios', compact('testimonios'));
    }
}
