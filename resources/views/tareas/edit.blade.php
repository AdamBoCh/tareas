<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="trabajador_id">Asignar a Trabajador:</label>
        <select id="trabajador_id" name="trabajador_id" required>
            <option value="">Seleccione un Trabajador</option>
            @foreach($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}" {{ $tarea->trabajador_id == $trabajador->id ? 'selected' : '' }}>
                    {{ $trabajador->nombre }} {{ $trabajador->apellido }}
                </option>
            @endforeach
        </select><br>

        <label for="fecha_limite">Fecha Limite:</label>
        <input type="date" id="fecha_limite" name="fecha_limite" value="{{ $tarea->fecha_limite }}" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required>{{ $tarea->descripcion }}</textarea><br>

        <button type="submit">Actualizar Tarea</button>
    </form>
</body>
</html>
