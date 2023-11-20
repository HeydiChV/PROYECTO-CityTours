@extends('layouts.app')

@section('content')
    <h1>Detalles de la Reserva (Admin)</h1>

    <ul>
        <li><strong>Paquete Turístico:</strong> {{ $reserva->paqueteTuristico->nombre }}</li>
        <li><strong>Usuario:</strong> {{ $reserva->usuario->nombre }} ({{ $reserva->usuario->correo }})</li>
        <li><strong>Fecha de Reserva:</strong> {{ $reserva->fecha_reserva }}</li>
        <li><strong>Cantidad de Personas:</strong> {{ $reserva->cantidad_personas }}</li>

        <a href="{{ route('admin.reservas.edit', $reserva->id) }}">Editar Reserva</a>
    </ul>
@endsection
