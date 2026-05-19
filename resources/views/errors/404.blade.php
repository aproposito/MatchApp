<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada — MatchApp</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <h1>404</h1>
        <h2>¡Ups, has quedado en fuera de juego!</h2>
        <p>La página que buscas no existe.</p>
        <a href="{{ url('/') }}">Volver al inicio</a>
    </div>
</body>
</html>
