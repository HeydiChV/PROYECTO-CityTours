@extends('layouts.app')

@section('content')
    <h1>Gestión de Paquetes Turísticos en Puno (Admin)</h1>

    <a href="{{ route('admin.paquetes.create') }}">Añadir Nuevo Paquete</a>

    @if(count($paquetes) > 0)
        <ul>
            @foreach($paquetes as $paquete)
                <li>
                    <h2>{{ $paquete->nombre }}</h2>
                    <p>{{ $paquete->descripcion }}</p>
                    <p><strong>Región:</strong> {{ $paquete->regionTuristica->nombre }}</p>
                    <p><strong>Precio:</strong> ${{ $paquete->precio }}</p>

                    <a href="{{ route('admin.paquetes.edit', $paquete->id) }}">Editar</a>
                    <a href="{{ route('admin.paquetes.show', $paquete->id) }}">Ver Detalles</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay paquetes turísticos disponibles en este momento.</p>
    @endif
@endsection
