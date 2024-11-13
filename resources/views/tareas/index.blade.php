<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <a href="{{ route('tareas.create') }}">Agregar Nueva Tarea</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Trabajador</th>
                <th>Fecha Límite</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->trabajador->nombre }} {{ $tarea->trabajador->apellido }}</td>
                    <td>{{ $tarea->fecha_limite }}</td>
                    <td>
                    <a href="{{ route('tareas.edit', $tarea->id) }}">Editar</a>
                        <form action="{{ route('tareas.destroy', $tarea->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
