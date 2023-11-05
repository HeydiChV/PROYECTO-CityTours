<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaqueteTuristico;
use Illuminate\Http\Request;

class AdminPaqueteTuristicoController extends Controller
{
    public function index()
    {
        $paquetes = PaqueteTuristico::all();
        return view('admin.paquetes.index', compact('paquetes'));
    }

    public function create()
    {
        return view('admin.paquetes.create');
    }

    public function store(Request $request)
    {
        // Lógica para almacenar un nuevo paquete turístico en la base de datos
    }

    public function edit($id)
    {
        $paquete = PaqueteTuristico::find($id);
        return view('admin.paquetes.edit', compact('paquete'));
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un paquete turístico existente en la base de datos
    }

    public function destroy($id)
    {
        // Lógica para eliminar un paquete turístico existente de la base de datos
    }
}
