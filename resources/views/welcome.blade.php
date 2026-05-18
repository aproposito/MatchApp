<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatchApp</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <h1>MatchApp</h1>
        <p>Porque no hace falta saber de fútbol para ganar el Mundial</p>

        <p>Predice los resultados de los partidos del Mundial 2026, acumula puntos y demuestra que no hace falta saber de fútbol para humillar a tu cuñado.</p>

        <p>Cada día encontrarás los partidos de la jornada. Pon tu marcador antes de que empiece el partido y cruza los dedos. Acertar el resultado, los goles de cada equipo o el campeón final te da puntos. Al final el ranking pondrá a todos en su sitio.</p>

        <a href="{{ route('register') }}">Apúntate</a>
        <a href="{{ route('login') }}">Ya tengo cuenta</a>
    </div>
</body>
</html>