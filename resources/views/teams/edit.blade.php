<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Editar equipo
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm p-6">
                <form action="{{ route('teams.update', $team) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('teams._form')
                    <button type="submit"
                        class="bg-red-600 text-white font-barlow font-bold text-xs uppercase tracking-widest px-6 py-2 rounded hover:bg-red-700 transition duration-150">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>