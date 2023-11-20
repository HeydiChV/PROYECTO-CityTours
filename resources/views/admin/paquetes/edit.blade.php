@extends('layouts.app')

@section('content')
    <h1>Edita un Paquete Turístico en Puno (Admin)</h1>

    <form action="{{ route('admin.paquetes.update', $paquete->id) }}" method="post">
        @csrf
        @method('put')

        <label for="nombre">Nombre del Paquete:</label>
        <input type="text" name="nombre" value="{{ $paquete->nombre }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $paquete->descripcion }}</textarea>

        <label for="region_id">Región Turística:</label>
        <select name="region_id" required>
            <!-- Opciones de regiones turísticas obtenidas de la base de datos -->
            @foreach($regiones as $region)
                <option value="{{ $region->id }}" {{ $region->id == $paquete->region_id ? 'selected' : '' }}>{{ $region->nombre }}</option>
            @endforeach
        </select>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="{{ $paquete->precio }}" required>

        <!-- Otros campos según sea necesario -->

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
