@extends('layouts.app')

@section('content')
    <h1>Descubre los Encantos de Puno</h1>

    @if(count($paquetes) > 0)
        <ul>
            @foreach($paquetes as $paquete)
                <li>
                    <h2>{{ $paquete->nombre }}</h2>
                    <p>{{ $paquete->descripcion }}</p>
                    <p><strong>Región:</strong> {{ $paquete->regionTuristica->nombre }}</p>
                    <p><strong>Precio:</strong> ${{ $paquete->precio }}</p>

                    <a href="{{ route('paquetes.show', $paquete->id) }}">Ver Detalles</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay paquetes turísticos disponibles en este momento.</p>
    @endif
@endsection
