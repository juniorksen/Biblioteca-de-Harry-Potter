<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a nuestra aplicación</h1>
        <p>¿Deseas iniciar sesión o crear una cuenta?</p>
        <div class="options">
            <a href= "{{ route('user.iniciar') }}">Iniciar Sesión</a>
            <a href="{{ route('user.Start') }}">Crear Cuenta</a>
        </div>
    </div>
</body>
</html>
