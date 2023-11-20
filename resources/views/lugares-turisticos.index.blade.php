@extends('layouts.app')

@section('content')
    <h1>Lugares Turísticos en Puno</h1>

    @if(count($lugaresTuristicos) > 0)
        <ul>
            @foreach($lugaresTuristicos as $lugarTuristico)
                <li>
                    <h2>{{ $lugarTuristico->nombre }}</h2>
                    <p>{{ $lugarTuristico->descripcion }}</p>
                    <p><strong>Región:</strong> {{ $lugarTuristico->regionTuristica->nombre }}</p>
                    <p><strong>Ubicación:</strong> {{ $lugarTuristico->ubicacion }}</p>
                    <!-- Otros campos según sea necesario -->

                    <a href="{{ route('lugares-turisticos.show', $lugarTuristico->id) }}">Ver Detalles</a>
                    <!-- Agregar enlaces para reservar, agregar al carrito, etc. según sea necesario -->
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay lugares turísticos disponibles en este momento.</p>
    @endif
@endsection
