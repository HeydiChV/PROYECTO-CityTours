<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LugarTuristico;


class LugarTuristicoController extends Controller
{
    public function index()
{
    $lugaresTuristicos = LugarTuristico::all(); // Asegúrate de importar el modelo LugarTuristico
    return view('lugares-turisticos.index', compact('lugaresTuristicos'));
}

}
