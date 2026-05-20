<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight flex items-baseline gap-3">
            Partidos de hoy
            <span class="font-noto text-sm font-normal text-red-600 normal-case tracking-normal">
                {{ now()->locale('es')->isoFormat('dddd D [de] MMMM') }}
            </span>
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            @forelse($matches as $match)

            {{-- Determinar estado --}}
            @php
            $isOpen = $match->match_date_time > now();
            $isFinished = $match->final_home_goals !== null;
            $isPlaying = !$isOpen && !$isFinished;
            $prediction = $match->matchPredictions->first();
            @endphp

            <div class="bg-white rounded-md mb-3 shadow-sm overflow-hidden">

                {{-- Cabecera de estado --}}
                <div class="flex items-center justify-between px-4 py-1
                    @if($isPlaying)  bg-red-600
                    @elseif($isOpen) bg-green-600
                    @else            bg-gray-400
                    @endif">

                    <span class="font-barlow font-bold text-xs uppercase tracking-widest
                        @if($isFinished) text-white/80 @else text-white/90 @endif">
                        @if($isPlaying) ● En juego
                        @elseif($isOpen) Por jugar
                        @else Terminado
                        @endif
                    </span>

                    <span class="font-barlow font-bold text-xs uppercase tracking-widest
                        @if($isFinished) text-white/80 @else text-white/90 @endif">
                        {{ $match->local_date }}
                    </span>

                    <span class="font-barlow font-bold text-xs uppercase tracking-widest
                        @if($isFinished) text-white/80 @else text-white/90 @endif">
                        {{ $match->phase }}
                    </span>
                </div>

                {{-- Cuerpo: equipos + marcador --}}
                <div class="flex items-center gap-3 px-4 py-3">

                    {{-- Equipo local --}}
                    <div class="flex-1 text-right">
                        @if($match->homeTeam->flag)
                        <img src="{{ $match->homeTeam->flag }}" class="h-6 w-auto inline-block mb-1">
                        @endif
                        <div class="font-oswald font-semibold text-base uppercase tracking-wide text-gray-900">
                            {{ $match->homeTeam->name }}
                        </div>
                    </div>

                    {{-- Marcador central --}}
                    <div class="flex-none w-24 text-center">
                        @if($isOpen)
                        <span class="font-barlow font-bold text-lg text-gray-500 uppercase tracking-widest">vs</span>
                        @else
                        <span class="font-oswald font-semibold text-3xl tracking-wide
                                @if($isPlaying) text-red-600 @else text-gray-900 @endif">
                            {{ $isFinished ? $match->final_home_goals : '–' }}
                            —
                            {{ $isFinished ? $match->final_away_goals : '–' }}
                        </span>
                        @endif
                    </div>

                    {{-- Equipo visitante --}}
                    <div class="flex-1 text-left">
                        @if($match->awayTeam->flag)
                        <img src="{{ $match->awayTeam->flag }}" class="h-6 w-auto inline-block mb-1">
                        @endif
                        <div class="font-oswald font-semibold text-base uppercase tracking-wide text-gray-900">
                            {{ $match->awayTeam->name }}
                        </div>
                    </div>

                </div>

                {{-- Footer: predicción / formulario --}}
                @if($isOpen && !$prediction && auth()->user()->role !== 'admin')
                {{-- Formulario de apuesta --}}
                <div class="border-t border-gray-100 bg-gray-50 px-4 py-2 flex items-center gap-2">
                    <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500">Tu apuesta:</span>
                    <form action="{{ route('match_predictions.store') }}" method="POST" class="flex items-center gap-2">
                        @csrf
                        <input type="hidden" name="match_id" value="{{ $match->id }}">
                        <input type="number" name="predicted_home_goal" min="0" max="20" required
                            class="w-12 border-2 border-gray-200 rounded text-center font-oswald font-semibold text-base text-gray-900 py-1 focus:outline-none focus:border-blue-800 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"> <span class="font-oswald text-base text-gray-500">—</span>
                        <input type="number" name="predicted_away_goal" min="0" max="20" required
                            class="w-12 border-2 border-gray-200 rounded text-center font-oswald font-semibold text-base text-gray-900 py-1 focus:outline-none focus:border-blue-800 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"> <button type="submit"
                            class="ml-2 bg-red-600 text-white font-barlow font-bold text-xs uppercase tracking-widest px-4 py-2 rounded hover:bg-red-700 transition duration-150">
                            Apostar
                        </button>
                    </form>
                </div>

                @elseif($prediction)
                {{-- Predicción del usuario --}}
                <div class="border-t border-gray-100 bg-gray-50 px-4 py-2 flex items-center gap-2">
                    <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500">Tu apuesta</span>
                    <span class="font-oswald font-semibold text-base text-blue-800 ml-1">
                        {{ $prediction->predicted_home_goal }} — {{ $prediction->predicted_away_goal }}
                    </span>
                    @if($isFinished)
                    <span class="ml-auto font-oswald font-semibold text-lg text-green-600">
                        {{ $prediction->points_sign + $prediction->points_home_goal + $prediction->points_away_goal + $prediction->points_bonus }}
                        <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 ml-1">pts</span>
                    </span>
                    @endif
                </div>
                @endif

            </div>{{-- fin tarjeta --}}

            @empty
            <p class="font-noto text-white/80 text-sm">No hay partidos hoy.</p>
            @endforelse
            @if(!$groupsFinished)
            {{-- La fase de grupos no ha terminado --}}

            @if($championPrediction)
            {{-- Ya ha votado — mostrar bloqueado --}}
            <p>Tu campeón: {{ $championPrediction->team->name }}</p>
            @else
            {{-- No ha votado — mostrar formulario --}}
            <form action="{{ route('champion_predictions.store') }}" method="POST">
                @csrf
                <select name="team_id">
                    <option value="">-- Elige tu campeón --</option>
                    @foreach($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                    @endforeach
                </select>
                <button type="submit">Votar</button>
            </form>
            @endif

            @endif
        </div>
    </div>
</x-app-layout>