<!DOCTYPE html>
<html>
<head>
    <title>Lugares Turísticos</title>
</head>
<body>
    <h1>Lugares Turísticos en Perú</h1>
    <ul>
        @foreach ($lugaresTuristicos as $lugarTuristico)
            <li>{{ $lugarTuristico->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>
