<form action="{{ $action }}" method="post">
    @csrf

    <label for="paquete_turistico">Selecciona un Paquete Turístico:</label>
    <select name="paquete_turistico" id="paquete_turistico" required>
        @foreach($paquetes as $paquete)
            <option value="{{ $paquete->id }}">{{ $paquete->nombre }}</option>
        @endforeach
    </select>

    <label for="fecha_reserva">Fecha de Reserva:</label>
    <input type="date" name="fecha_reserva" required>

    <label for="cantidad_personas">Número de Personas:</label>
    <input type="number" name="cantidad_personas" required>


    <button type="submit">Reservar</button>
</form>
