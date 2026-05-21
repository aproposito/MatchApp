<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
                Equipos
            </h2>
            <a href="{{ route('teams.create') }}"
                class="bg-red-600 text-white font-barlow font-bold text-xs uppercase tracking-widest px-4 py-2 rounded hover:bg-red-700 transition duration-150">
                + Crear equipo
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm overflow-hidden">

                {{-- Cabecera --}}
                <div class="grid grid-cols-12 px-4 py-2 bg-gray-900">
                    <div class="col-span-1 font-barlow font-bold text-xs uppercase tracking-widest text-white">#</div>
                    <div class="col-span-2 font-barlow font-bold text-xs uppercase tracking-widest text-white">Bandera</div>
                    <div class="col-span-6 font-barlow font-bold text-xs uppercase tracking-widest text-white">Nombre</div>
                    <div class="col-span-3 text-right font-barlow font-bold text-xs uppercase tracking-widest text-white">Acciones</div>
                </div>

                {{-- Filas --}}
                @foreach($teams as $team)
                <div class="grid grid-cols-12 items-center px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition duration-100">

                    {{-- Número --}}
                    <div class="col-span-1">
                        <span class="font-barlow font-bold text-sm text-gray-400">{{ $loop->iteration }}</span>
                    </div>

                    {{-- Bandera --}}
                    <div class="col-span-2">
                        @if($team->flag)
                            <img src="{{ $team->flag }}" alt="{{ $team->name }}" class="h-6 w-auto">
                        @else
                            <span class="text-gray-300 text-xs">—</span>
                        @endif
                    </div>

                    {{-- Nombre --}}
                    <div class="col-span-6">
                        <span class="font-oswald font-semibold text-base uppercase tracking-wide text-gray-900">
                            {{ $team->name }}
                        </span>
                    </div>

                    {{-- Acciones --}}
                    <div class="col-span-3 flex justify-end items-center gap-2">
                        <a href="{{ route('teams.edit', $team) }}"
                            class="font-barlow font-bold text-xs uppercase tracking-widest text-blue-800 hover:text-blue-900 transition duration-150">
                            Editar
                        </a>
                        <form action="{{ route('teams.destroy', $team) }}" method="POST"
                            onsubmit="return confirm('¿Eliminar {{ $team->name }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="font-barlow font-bold text-xs uppercase tracking-widest text-red-600 hover:text-red-700 transition duration-150">
                                Eliminar
                            </button>
                        </form>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>