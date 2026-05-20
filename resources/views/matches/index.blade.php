<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
                Gestión de partidos
            </h2>
            <a href="{{ route('matches.create') }}"
                class="bg-red-600 text-white font-barlow font-bold text-xs uppercase tracking-widest px-4 py-2 rounded hover:bg-red-700 transition duration-150">
                + Crear partido
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm overflow-hidden">

                {{-- Cabecera --}}
                <div class="grid grid-cols-12 px-4 py-2 bg-gray-900">
                    <div class="col-span-3 font-barlow font-bold text-xs uppercase tracking-widest text-white">Local</div>
                    <div class="col-span-3 font-barlow font-bold text-xs uppercase tracking-widest text-white">Visitante</div>
                    <div class="col-span-2 font-barlow font-bold text-xs uppercase tracking-widest text-white">Fase</div>
                    <div class="col-span-2 font-barlow font-bold text-xs uppercase tracking-widest text-white">Fecha</div>
                    <div class="col-span-1 text-center font-barlow font-bold text-xs uppercase tracking-widest text-white">Res.</div>
                    <div class="col-span-1 text-right font-barlow font-bold text-xs uppercase tracking-widest text-white">Acc.</div>
                </div>

                {{-- Filas --}}
                @foreach($matches as $match)
                <div class="grid grid-cols-12 items-center px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition duration-100">

                    {{-- Local --}}
                    <div class="col-span-3 flex items-center gap-2">
                        @if($match->homeTeam->flag)
                            <img src="{{ $match->homeTeam->flag }}" class="h-5 w-auto">
                        @endif
                        <span class="font-oswald font-semibold text-sm uppercase tracking-wide text-gray-900">
                            {{ $match->homeTeam->name }}
                        </span>
                    </div>

                    {{-- Visitante --}}
                    <div class="col-span-3 flex items-center gap-2">
                        @if($match->awayTeam->flag)
                            <img src="{{ $match->awayTeam->flag }}" class="h-5 w-auto">
                        @endif
                        <span class="font-oswald font-semibold text-sm uppercase tracking-wide text-gray-900">
                            {{ $match->awayTeam->name }}
                        </span>
                    </div>

                    {{-- Fase --}}
                    <div class="col-span-2">
                        <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400">
                            {{ $match->phase }}
                        </span>
                    </div>

                    {{-- Fecha --}}
                    <div class="col-span-2">
                        <span class="font-noto text-xs text-gray-500">
                            {{ $match->local_date }}
                        </span>
                    </div>

                    {{-- Resultado --}}
                    <div class="col-span-1 text-center">
                        @if($match->final_home_goals !== null)
                            <span class="font-oswald font-semibold text-sm text-gray-900">
                                {{ $match->final_home_goals }}—{{ $match->final_away_goals }}
                            </span>
                        @else
                            <span class="text-gray-300">—</span>
                        @endif
                    </div>

                    {{-- Acciones --}}
                    <div class="col-span-1 flex justify-end items-center gap-2">
                        <a href="{{ route('matches.edit', $match) }}"
                            class="font-barlow font-bold text-xs uppercase tracking-widest text-blue-800 hover:text-blue-900 transition duration-150">
                            Editar
                        </a>
                        <form action="{{ route('matches.destroy', $match) }}" method="POST"
                            onsubmit="return confirm('¿Eliminar este partido?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="font-barlow font-bold text-xs uppercase tracking-widest text-red-600 hover:text-red-700 transition duration-150">
                                ×
                            </button>
                        </form>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>