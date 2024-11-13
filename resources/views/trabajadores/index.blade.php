<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Trabajadores</title>
</head>
<body>
    <h1>Lista de Trabajadores</h1>
    <a href="{{ route('trabajadores.create') }}">Agregar Nuevo Trabajador</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trabajadores as $trabajador)
                <tr>
                    <td>{{ $trabajador->id }}</td>
                    <td>{{ $trabajador->nombre }}</td>
                    <td>{{ $trabajador->apellido }}</td>
                    <td>{{ $trabajador->dni }}</td>
                    <td>
                    <a href="{{ route('trabajadores.show', $trabajador->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
