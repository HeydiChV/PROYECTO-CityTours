@extends('layouts.app')

@section('content')
    <h1>Tu Perfil en City Tours Puno</h1>

    <div>
        <p><strong>Nombre:</strong> {{ auth()->user()->nombre }}</p>
        <p><strong>Correo Electrónico:</strong> {{ auth()->user()->correo }}</p>
        <p><strong>Teléfono:</strong> {{ auth()->user()->telefono }}</p>
    </div>

    <div>
        <a href="{{ route('perfil.edit') }}">Editar Perfil</a>
    </div>
@endsection
