<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Trabajador</title>
</head>
<body>
    <h1>Detalles del Trabajador</h1>
    <p>ID: {{ $trabajador->id }}</p>
    <p>Nombre: {{ $trabajador->nombre }}</p>
    <p>Apellido: {{ $trabajador->apellido }}</p>
    <p>DNI: {{ $trabajador->dni }}</p>
    <a href="{{ route('trabajadores.index') }}">Volver a la Lista</a>
    </body>
</html>
