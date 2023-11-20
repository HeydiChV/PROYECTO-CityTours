<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\PaqueteTuristico;

class ReservaController extends Controller
{
    public function create($id)
    {
        $paquete = PaqueteTuristico::findOrFail($id);
        return view('reservas.create', compact('paquete'));
    }

    public function store(Request $request, $id)
    {
        // Validar los datos del formulario de reserva
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            // Otras reglas de validación según sea necesario
        ]);

        // Crear la reserva en la base de datos
        Reserva::create([
            'paquete_id' => $id,
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            // Otros campos según sea necesario
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('paquetes.show', $id)->with('success', 'Reserva realizada con éxito');
    }

    public function index()
    {
        // Obtener y mostrar la lista de reservas del usuario desde la base de datos
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    // Otras acciones según sea necesario, como show, edit, update, destroy, etc.
}
