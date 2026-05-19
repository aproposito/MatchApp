<x-app-layout>
    <x-slot name="header">
        <h2>Editar equipo</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('teams.update', $team) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}">
                </div>

                <div>
                    <label for="flag">Bandera (URL)</label>
                    <input type="text" name="flag" id="flag" value="{{ old('flag', $team->flag) }}">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit">Guardar</button>

            </form>
        </div>
    </div>
</x-app-layout>