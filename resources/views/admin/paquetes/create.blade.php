@extends('layouts.app')

@section('content')
    <h1>Añade un Nuevo Paquete Turístico en Puno (Admin)</h1>

    <form action="{{ route('admin.paquetes.store') }}" method="post">
        @csrf

        <label for="nombre">Nombre del Paquete:</label>
        <input type="text" name="nombre" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required></textarea>

        <label for="region_id">Región Turística:</label>
        <select name="region_id" required>
            @foreach($regiones as $region)
                <option value="{{ $region->id }}">{{ $region->nombre }}</option>
            @endforeach
        </select>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" required>


        <button type="submit">Agregar Paquete</button>
    </form>
@endsection
