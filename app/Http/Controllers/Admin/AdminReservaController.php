<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use Illuminate\Http\Request;

class AdminReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('admin.reservas.index', compact('reservas'));
    }

    public function show($id)
    {
        $reserva = Reserva::find($id);
        return view('admin.reservas.show', compact('reserva'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar el estado de una reserva (por ejemplo, confirmada, cancelada) en la base de datos
    }
}
