<?php

namespace App\Http\Controllers;

use App\Models\PaqueteTuristico;
use Illuminate\Http\Request;

class PaqueteTuristicoController extends Controller
{
    public function index()
    {
        $paquetes = PaqueteTuristico::all();
        return view('paquetes.index', compact('paquetes'));
    }

    public function show($id)
    {
        $paquete = PaqueteTuristico::findOrFail($id);
        return view('paquetes.show', compact('paquete'));
    }

    // Otras acciones según sea necesario, como create, store, edit, update, destroy, etc.
    public function registroPaquete(){
        return view('registro-paquetes');
    }
}
