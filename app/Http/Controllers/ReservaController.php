<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    // Muestra el formulario de reservas
    public function mostrarFormulario()
    {
        // Retorna la vista del formulario para reservar una cita
        return view('pages.reservar_cita');
    }

    // Almacena una nueva reserva en la base de datos
    public function reservar(Request $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string|max:15',
            'fecha_hora' => 'required|date',
            'comentarios' => 'nullable|string',
        ]);

        // Crea una nueva reserva con los datos validados
        Reserva::create($validatedData);

        // Redirige al formulario con un mensaje de éxito
        return redirect()->back()->with('success', 'Reserva realizada con éxito.');
    }
}
