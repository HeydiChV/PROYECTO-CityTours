@extends('layouts.app')

@section('content')
    <h1>Editar Reserva (Admin)</h1>

    <form action="{{ route('admin.reservas.update', $reserva->id) }}" method="post">
        @csrf
        @method('put')

        <label for="paquete_turistico">Paquete Turístico:</label>
        <select name="paquete_turistico" disabled>
            <option value="{{ $reserva->paqueteTuristico->id }}">{{ $reserva->paqueteTuristico->nombre }}</option>
        </select>

        <label for="usuario">Usuario:</label>
        <select name="usuario" disabled>
            <option value="{{ $reserva->usuario->id }}">{{ $reserva->usuario->nombre }} ({{ $reserva->usuario->correo }})</option>
        </select>

        <label for="fecha_reserva">Fecha de Reserva:</label>
        <input type="date" name="fecha_reserva" value="{{ $reserva->fecha_reserva }}" required>

        <label for="cantidad_personas">Cantidad de Personas:</label>
        <input type="number" name="cantidad_personas" value="{{ $reserva->cantidad_personas }}" required>



        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
