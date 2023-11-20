@extends('layouts.app')

@section('content')
    <h1>Edita tu Información en City Tours Puno</h1>

    <form action="{{ route('perfil.update') }}" method="post">
        @csrf
        @method('put')

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ auth()->user()->nombre }}" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" value="{{ auth()->user()->correo }}" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" value="{{ auth()->user()->telefono }}">

        <!-- Otros campos según sea necesario -->

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
