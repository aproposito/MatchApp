<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=....|oswald:600&display=swap" rel="stylesheet" />
    <title>MatchApp</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">

    {{-- Franja tricolor --}}
    <div class="h-2 w-full" style="background: linear-gradient(90deg, #E61D25 33.3%, #2A398D 33.3% 66.6%, #3CAC3B 66.6%)"></div>

    {{-- Hero --}}
    <div class="relative overflow-hidden min-h-0 flex flex-col justify-center px-12 py-16">

        {{-- "26" de fondo --}}
        <div class="absolute right-0 top-0 font-oswald font-semibold text-[420px] leading-none text-blue-900/5 pointer-events-none select-none">
            26
        </div>

        {{-- Contenido --}}
        <div class="relative z-10">

            {{-- Trofeo --}}
            <div class="text-5xl mb-4">🏆</div>

            {{-- Eyebrow --}}
            <div class="font-barlow font-bold text-sm uppercase tracking-widest text-red-600 mb-3">
                Mundial 2026
            </div>

            {{-- Título --}}
            <div class="font-oswald font-semibold text-9xl text-gray-900 tracking-wide mb-8">
                Match<span class="text-red-600">App</span>
            </div>

            {{-- Tagline --}}
            <div class="font-barlow font-black text-3xl uppercase tracking-wide text-gray-800 mb-4">
                Porque no hace falta saber de fútbol para ganar el Mundial
            </div>

            {{-- Intro --}}
            <div class="font-noto text-base text-gray-700 max-w-lg mb-6">
                Predice los resultados de los partidos, acumula puntos y demuestra
                que no hace falta saber de fútbol para humillar a tu cuñado.
            </div>

            {{-- CTAs --}}
            <div class="flex gap-4 mb-0">
                <a href="{{ route('register') }}"
                    class="font-oswald font-semibold text-base uppercase tracking-wide bg-red-600 text-white px-8 py-3 rounded hover:bg-red-700 transition duration-150">
                    Apúntate
                </a>
                <a href="{{ route('login') }}"
                    class="font-oswald font-semibold text-base uppercase tracking-wide bg-transparent text-gray-700 border-2 border-gray-300 px-8 py-3 rounded hover:border-gray-500 hover:text-gray-900 transition duration-150">
                    Ya tengo cuenta
                </a>
            </div>

        </div>{{-- fin contenido --}}

    </div>{{-- fin hero --}}

    {{-- Métricas --}}
    <div class="grid grid-cols-4 border-t-4 border-gray-900">

        <div class="bg-white px-4 py-6 text-center border-r border-gray-200">
            <div class="font-oswald font-semibold text-5xl text-red-600">48</div>
            <div class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400 mt-1">Equipos</div>
        </div>

        <div class="bg-white px-4 py-6 text-center border-r border-gray-200">
            <div class="font-oswald font-semibold text-5xl text-blue-800">104</div>
            <div class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400 mt-1">Partidos</div>
        </div>

        <div class="bg-white px-4 py-6 text-center border-r border-gray-200">
            <div class="font-oswald font-semibold text-5xl text-gray-900">+9.000</div>
            <div class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400 mt-1">Minutos de emoción</div>
        </div>

        <div class="bg-white px-4 py-6 text-center">
            <div class="font-oswald font-semibold text-5xl text-green-700">10.000</div>
            <div class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400 mt-1">Puntos en juego</div>
        </div>

    </div>{{-- fin métricas --}}

</body>

</html>