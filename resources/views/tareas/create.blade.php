<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Tarea</title>
</head>
<body>
    <h1>Agregar Nueva Tarea</h1>
    <form action="{{ route('tareas.store') }}" method="POST">
        @csrf
        <label for="trabajador_id">Asignar a Trabajador:</label>
        <select id="trabajador_id" name="trabajador_id" required>
            <option value="">Seleccione un Trabajador</option>
            @foreach($trabajadores as $trabajador)
                <option value="{{ $trabajador->id }}">{{ $trabajador->nombre }} {{ $trabajador->apellido }}</option>
            @endforeach
        </select><br>

        <label for="fecha_limite">Fecha Límite:</label>
        <input type="date" id="fecha_limite" name="fecha_limite" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>

        <button type="submit">Guardar Tarea</button>
    </form>
</body>
</html>
