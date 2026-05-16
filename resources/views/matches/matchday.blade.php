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

                {{-- Estado del partido --}}
                @if($match->match_date_time > now())
                {{-- ABIERTO --}}
                <p class="text-green-600">Abierto</p>

                @if($match->matchPredictions->first())
                {{-- Ya apostó --}}
                <p>Tu predicción: {{ $match->matchPredictions->first()->predicted_home_goal }} - {{ $match->matchPredictions->first()->predicted_away_goal }}</p>
                @else
                {{-- Formulario de predicción--}}
                <form action="{{ route('match_predictions.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="match_id" value="{{ $match->id }}">

                    <div>
                        <label>Goles {{ $match->homeTeam->name }}</label>
                        <input type="number" name="predicted_home_goal" min="0" max="20" required>
                    </div>

                    <div>
                        <label>Goles {{ $match->awayTeam->name }}</label>
                        <input type="number" name="predicted_away_goal" min="0" max="20" required>
                    </div>

                    <button type="submit">Apostar</button>
                </form>
                @endif

                @else
                {{-- CERRADO --}}
                @if($match->final_home_goals !== null)
                <p>Resultado: {{ $match->final_home_goals }} - {{ $match->final_away_goals }}</p>
                @else
                <p class="text-orange-500">En juego</p>
                @endif

                {{-- Predicción y puntos del usuario --}}
                @if($match->matchPredictions->first())
                <p>Tu predicción: {{ $match->matchPredictions->first()->predicted_home_goal }} - {{ $match->matchPredictions->first()->predicted_away_goal }}</p>
                <p>Puntos: {{
                        $match->matchPredictions->first()->points_sign + 
                        $match->matchPredictions->first()->points_home_goals + 
                        $match->matchPredictions->first()->points_away_goals + 
                        $match->matchPredictions->first()->points_bonus 
                    }}</p>
                @endif
                @endif

            </div>
            @empty
            <p>No hay partidos hoy.</p>
            @endforelse

        </div>
    </div>
</x-app-layout>