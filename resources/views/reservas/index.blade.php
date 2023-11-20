@extends('layouts.app')

@section('content')
    <h1>Tus Reservas en Puno</h1>

    @if(count($reservas) > 0)
        <table>
            <thead>
                <tr>
                    <th>Paquete Turístico</th>
                    <th>Fecha de Reserva</th>
                    <th>Cantidad de Personas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->paqueteTuristico->nombre }}</td>
                        <td>{{ $reserva->fecha_reserva }}</td>
                        <td>{{ $reserva->cantidad_personas }}</td>
                        <td>
                            <a href="{{ route('reservas.show', $reserva->id) }}">Ver Detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No tienes reservas realizadas.</p>
    @endif
@endsection
