<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Partidos de hoy
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @forelse($matches as $match)
            <div class="bg-white rounded-lg shadow p-6 mb-4">

                {{-- Hora y fase --}}
                <div>
                    <span>{{ $match->local_date }}</span>
                    <span>{{ $match->phase }}</span>
                </div>

                {{-- Equipos --}}
                <div>
                    <div>
                        @if($match->homeTeam->flag)
                        <img src="{{ $match->homeTeam->flag }}" class="h-6 w-auto inline">
                        @endif
                        {{ $match->homeTeam->name }}
                    </div>

                    <span>vs</span>

                    <div>
                        @if($match->awayTeam->flag)
                        <img src="{{ $match->awayTeam->flag }}" class="h-6 w-auto inline">
                        @endif
                        {{ $match->awayTeam->name }}
                    </div>
                </div>

                @if($match->match_date_time > now())
                {{-- Abierto: mostrar formulario de predicción --}}
                <p class="text-green-600">Abierto</p>

                @else
                {{-- Cerrado: mostrar resultado --}}
                @if($match->final_home_goals !== null)
                <p>{{ $match->final_home_goals }} - {{ $match->final_away_goals }}</p>
                @else
                <p class="text-orange-500">En juego</p>
                @endif
                @endif

            </div>
            @empty
            <p>No hay partidos hoy.</p>
            @endforelse

        </div>
    </div>
</x-app-layout>