@extends('layouts.app')

@section('content')
    <h1>Reserva tu Experiencia en Puno</h1>
    
    <form action="{{ route('reservas.store') }}" method="post">
        @csrf

        <label for="paquete_turistico">Selecciona un Paquete Turístico:</label>
        <select name="paquete_turistico" id="paquete_turistico">
            <!-- Opciones de paquetes turísticos obtenidas de la base de datos -->
            <option value="1">Paquete 1</option>
            <option value="2">Paquete 2</option>
            <!-- ... -->
        </select>

        <label for="fecha_reserva">Fecha de Reserva:</label>
        <input type="date" name="fecha_reserva" required>

        <label for="cantidad_personas">Número de Personas:</label>
        <input type="number" name="cantidad_personas" required>

        <!-- Otros campos según sea necesario -->

        <button type="submit">Reservar</button>
    </form>
@endsection
