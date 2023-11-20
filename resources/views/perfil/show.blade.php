@extends('layouts.app')

@section('content')
    <h1>Tu Perfil en City Tours Puno</h1>

    <div>
        <p><strong>Nombre:</strong> {{ auth()->user()->nombre }}</p>
        <p><strong>Correo Electrónico:</strong> {{ auth()->user()->correo }}</p>
        <p><strong>Teléfono:</strong> {{ auth()->user()->telefono }}</p>
        <!-- Otros campos según sea necesario -->
    </div>

    <div>
        <a href="{{ route('perfil.edit') }}">Editar Perfil</a>
        <!-- Agregar enlaces para cambiar la contraseña, eliminar cuenta, etc. según sea necesario -->
    </div>
@endsection
