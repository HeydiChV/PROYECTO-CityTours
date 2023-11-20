@extends('layouts.app')

@section('content')
    <h1>Gestión de Reservas en Puno (Admin)</h1>

    @if(count($reservas) > 0)
        <ul>
            @foreach($reservas as $reserva)
                <li>
                    <h2>Reserva para {{ $reserva->paqueteTuristico->nombre }}</h2>
                    <p><strong>Usuario:</strong> {{ $reserva->usuario->nombre }} ({{ $reserva->usuario->correo }})</p>
                    <p><strong>Fecha de Reserva:</strong> {{ $reserva->fecha_reserva }}</p>
                    <p><strong>Cantidad de Personas:</strong> {{ $reserva->cantidad_personas }}</p>

                    <a href="{{ route('admin.reservas.show', $reserva->id) }}">Ver Detalles</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay reservas disponibles en este momento.</p>
    @endif
@endsection
