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
                    <!-- Otros campos según sea necesario -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->paqueteTuristico->nombre }}</td>
                        <td>{{ $reserva->fecha_reserva }}</td>
                        <td>{{ $reserva->cantidad_personas }}</td>
                        <!-- Otros campos según sea necesario -->
                        <td>
                            <a href="{{ route('reservas.show', $reserva->id) }}">Ver Detalles</a>
                            <!-- Agregar enlaces para editar o cancelar la reserva según sea necesario -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No tienes reservas realizadas.</p>
    @endif
@endsection
