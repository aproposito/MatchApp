<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Mis apuestas
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            @forelse($predictions as $prediction)

            {{-- Tarjeta --}}
            <div class="bg-white rounded shadow mb-4">

                {{-- Cabecera --}}
                <div class="bg-gray-400 text-white px-4 py-1 rounded-t flex justify-between items-center">
                    <span class="font-barlow font-bold text-xs uppercase tracking-widest">
                        {{ $prediction->matchGame->local_date }}
                    </span>
                    <span class="font-barlow font-bold text-xs uppercase tracking-widest">
                        {{ $prediction->matchGame->phase }}
                    </span>
                </div>

                {{-- Cuerpo: equipos + marcador --}}
                <div class="flex items-center gap-3 px-4 py-3">

                    {{-- Equipo local --}}
                    <div class="flex-1 text-right">
                        @if($prediction->matchGame->homeTeam->flag)
                            <img src="{{ $prediction->matchGame->homeTeam->flag }}" class="h-6 w-auto inline-block mb-1">
                        @endif
                        <div class="font-oswald font-semibold text-base uppercase tracking-wide text-gray-900">
                            {{ $prediction->matchGame->homeTeam->name }}
                        </div>
                    </div>

                    {{-- Marcador --}}
                    <div class="flex-none w-24 text-center">
                        <span class="font-oswald font-semibold text-3xl tracking-wide text-gray-900">
                            {{ $prediction->matchGame->final_home_goals }}
                            —
                            {{ $prediction->matchGame->final_away_goals }}
                        </span>
                    </div>

                    {{-- Equipo visitante --}}
                    <div class="flex-1 text-left">
                        @if($prediction->matchGame->awayTeam->flag)
                            <img src="{{ $prediction->matchGame->awayTeam->flag }}" class="h-6 w-auto inline-block mb-1">
                        @endif
                        <div class="font-oswald font-semibold text-base uppercase tracking-wide text-gray-900">
                            {{ $prediction->matchGame->awayTeam->name }}
                        </div>
                    </div>

                </div>

                {{-- Footer: apuesta y puntos --}}
                <div class="border-t border-gray-100 bg-gray-50 px-4 py-2 flex items-center gap-2 rounded-b">
                    <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500">Tu apuesta</span>
                    <span class="font-oswald font-semibold text-base text-blue-800 ml-1">
                        {{ $prediction->predicted_home_goal }} — {{ $prediction->predicted_away_goal }}
                    </span>
                    <span class="ml-auto font-oswald font-semibold text-lg text-green-600">
                        {{ $prediction->points_sign + $prediction->points_home_goal + $prediction->points_away_goal + $prediction->points_bonus }}
                        <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 ml-1">pts</span>
                    </span>
                </div>

            </div>{{-- fin tarjeta --}}

            @empty
                <p class="font-noto text-gray-500 text-center py-8">Todavía no tienes apuestas en partidos terminados.</p>
            @endforelse

        </div>
    </div>
</x-app-layout>