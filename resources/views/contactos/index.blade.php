<!DOCTYPE html>
<html>
<head>
    <title>Registrar Contacto</title>
</head>
<body>
    <h1>Registrar Información de Contacto</h1>
    <form action="{{ route('contactos.guardar') }}" method="POST">
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div>
            <label>Teléfono:</label>
            <input type="text" name="telefono" required>
        </div>
        <div>
            <label>Dirección:</label>
            <input type="text" name="direccion" required>
        </div>
        <button type="submit">Registrar Contacto</button>
    </form>
</body>
</html>
