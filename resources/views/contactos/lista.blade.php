<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contactos</title>
</head>
<body>
    <h1>Lista de Contactos</h1>
    <ul>
        @foreach($contactos as $contacto)
            <li>{{ $contacto['nombre'] }} - {{ $contacto['telefono'] }} - {{ $contacto['direccion'] }}</li>
        @endforeach
    </ul>
</body>
</html>
