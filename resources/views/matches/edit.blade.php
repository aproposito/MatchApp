<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Editar partido
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm p-6">
                <form action="{{ route('matches.update', $match) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('matches._form')

                    {{-- Resultado (solo en edit) --}}
                    <div class="border-t border-gray-100 pt-6 mt-2 mb-4">
                        <p class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400 mb-4">
                            Resultado final
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="flex-1">
                                <label for="final_home_goals" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
                                    Goles local
                                </label>
                                <input type="number" name="final_home_goals" id="final_home_goals" min="0" max="20"
                                    value="{{ old('final_home_goals', $match->final_home_goals) }}"
                                    class="w-full border-2 border-gray-200 rounded px-3 py-2 font-oswald font-semibold text-lg text-gray-900 text-center focus:outline-none focus:border-blue-800 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none">
                                @error('final_home_goals')
                                    <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <span class="font-oswald font-semibold text-2xl text-gray-300 mt-5">—</span>

                            <div class="flex-1">
                                <label for="final_away_goals" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
                                    Goles visitante
                                </label>
                                <input type="number" name="final_away_goals" id="final_away_goals" min="0" max="20"
                                    value="{{ old('final_away_goals', $match->final_away_goals) }}"
                                    class="w-full border-2 border-gray-200 rounded px-3 py-2 font-oswald font-semibold text-lg text-gray-900 text-center focus:outline-none focus:border-blue-800 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none">
                                @error('final_away_goals')
                                    <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit"
                        class="bg-red-600 text-white font-barlow font-bold text-xs uppercase tracking-widest px-6 py-2 rounded hover:bg-red-700 transition duration-150">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>