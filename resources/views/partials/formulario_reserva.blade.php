<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    <!-- Campos del formulario para la reserva (nombre, fecha, número de personas, etc.) -->
    <button type="submit">Reservar</button>
</form>
