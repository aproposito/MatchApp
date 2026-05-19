<x-app-layout>
    <x-slot name="header">
        <h2>Editar partido</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('matches.update', $match) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="home_team_id">Equipo local</label>
                    <select name="home_team_id" id="home_team_id">
                        <option value="">-- Selecciona un equipo --</option>
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ old('home_team_id', $match->home_team_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('home_team_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="away_team_id">Equipo visitante</label>
                    <select name="away_team_id" id="away_team_id">
                        <option value="">-- Selecciona un equipo --</option>
                        @foreach($teams as $team)
                        <option value="{{ $team->id }}" {{ old('away_team_id', $match->away_team_id) == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('away_team_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="phase">Fase</label>
                    <select name="phase" id="phase">
                        <option value="">-- Selecciona una fase --</option>
                        <option value="groups" {{ old('phase', $match->phase) == 'groups' ? 'selected' : '' }}>Fase de grupos</option>
                        <option value="round_of_16" {{ old('phase') == 'round_of_16' ? 'selected' : '' }}>Octavos</option>
                        <option value="quarters" {{ old('phase') == 'quarters' ? 'selected' : '' }}>Cuartos</option>
                        <option value="semis" {{ old('phase') == 'semis' ? 'selected' : '' }}>Semifinales</option>
                        <option value="final" {{ old('phase') == 'final' ? 'selected' : '' }}>Final</option>
                    </select>
                    @error('phase')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="flag">Fecha y hora</label>
                    <input type="datetime-local" name="match_date_time" id="match_date_time" value="{{ old('match_date_time', $match->match_date_time) }}">
                    @error('match_date_time')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="final_home_goals">Goles local</label>
                    <input type="number" name="final_home_goals" id="final_home_goals" min="0" max="20"
                        value="{{ old('final_home_goals', $match->final_home_goals) }}">
                    @error('final_home_goals')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="final_away_goals">Goles visitante</label>
                    <input type="number" name="final_away_goals" id="final_away_goals" min="0" max="20"
                        value="{{ old('final_away_goals', $match->final_away_goals) }}">
                    @error('final_away_goals')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit">Guardar</button>

            </form>
        </div>
    </div>
</x-app-layout>