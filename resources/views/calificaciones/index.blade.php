<!DOCTYPE html>
<html>
<head>
    <title>Calcular Promedio</title>
</head>
<body>
    <h1>Ingresar Calificaciones</h1>
    <form action="{{ route('calificaciones.calcular') }}" method="POST">
        @csrf
        <div>
            <label>Calificación 1:</label>
            <input type="number" name="calificaciones[]" required>
        </div>
        <div>
            <label>Calificación 2:</label>
            <input type="number" name="calificaciones[]" required>
        </div>
        <div>
            <label>Calificación 3:</label>
            <input type="number" name="calificaciones[]" required>
        </div>
        <button type="submit">Calcular Promedio</button>
    </form>
</body>
</html>
