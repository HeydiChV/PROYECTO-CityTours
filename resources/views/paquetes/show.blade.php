@extends('layouts.app')

@section('content')
    <h1>Detalles del Paquete Turístico en Puno</h1>

    <div>
        <h2>{{ $paquete->nombre }}</h2>
        <p>{{ $paquete->descripcion }}</p>
        <p><strong>Región:</strong> {{ $paquete->regionTuristica->nombre }}</p>
        <p><strong>Precio:</strong> ${{ $paquete->precio }}</p>
        <!-- Otros campos según sea necesario -->

        <!-- Agregar aquí detalles adicionales del paquete -->

        <form action="{{ route('reservas.create') }}" method="get">
            @csrf
            <input type="hidden" name="paquete_id" value="{{ $paquete->id }}">
            <button type="submit">Reservar este Paquete</button>
        </form>
        <!-- Agregar enlaces o botones para reservar, agregar al carrito, etc. según sea necesario -->
    </div>
@endsection
