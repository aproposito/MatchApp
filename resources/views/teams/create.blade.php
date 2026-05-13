<x-app-layout>
    <x-slot name="header">
        <h2>Crear equipo</h2>
    </x-slot>

    {{-- El contenido va AQUÍ, fuera del slot --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('teams.store') }}" method="POST">
                @csrf

                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                </div>

                <div>
                    <label for="flag">Bandera (URL)</label>
                    <input type="text" name="flag" id="flag" value="{{ old('flag') }}">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit">Guardar</button>

            </form>
        </div>
    </div>
</x-app-layout>