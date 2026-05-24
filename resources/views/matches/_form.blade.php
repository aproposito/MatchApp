{{-- Equipo local --}}
<div class="mb-4">
    <label for="home_team_id" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
        Equipo local
    </label>
    <select name="home_team_id" id="home_team_id"
        class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
        <option value="">— Selecciona un equipo —</option>
        @foreach($teams as $team)
        <option value="{{ $team->id }}" {{ old('home_team_id', $match->home_team_id ?? '') == $team->id ? 'selected' : '' }}>
            {{ $team->name }}
        </option>
        @endforeach
    </select>
    @error('home_team_id')
    <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Equipo visitante --}}
<div class="mb-4">
    <label for="away_team_id" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
        Equipo visitante
    </label>
    <select name="away_team_id" id="away_team_id"
        class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
        <option value="">— Selecciona un equipo —</option>
        @foreach($teams as $team)
        <option value="{{ $team->id }}" {{ old('away_team_id', $match->away_team_id ?? '') == $team->id ? 'selected' : '' }}>
            {{ $team->name }}
        </option>
        @endforeach
    </select>
    @error('away_team_id')
    <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Fase --}}
<div class="mb-4">
    <label for="phase" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
        Fase
    </label>
    <select name="phase" id="phase"
        class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
        <option value="">— Selecciona una fase —</option>
        <option value="groups" {{ old('phase', $match->phase ?? '') == 'groups'     ? 'selected' : '' }}>Fase de grupos</option>
        <option value="round_of_16" {{ old('phase', $match->phase ?? '') == 'round_of_16' ? 'selected' : '' }}>Octavos</option>
        <option value="quarters" {{ old('phase', $match->phase ?? '') == 'quarters'   ? 'selected' : '' }}>Cuartos</option>
        <option value="semis" {{ old('phase', $match->phase ?? '') == 'semis'      ? 'selected' : '' }}>Semifinales</option>
        <option value="final" {{ old('phase', $match->phase ?? '') == 'final'      ? 'selected' : '' }}>Final</option>
    </select>
    @error('phase')
    <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Fecha y hora --}}
<div class="mb-6">
    <label for="match_date_time" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
        Fecha y hora
    </label>
    <input type="datetime-local" name="match_date_time" id="match_date_time"
        value="{{ old('match_date_time', isset($match) ? \Carbon\Carbon::parse($match->match_date_time, 'UTC')->setTimezone('Europe/Madrid')->format('Y-m-d\TH:i') : '') }}"
        class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
    @error('match_date_time')
    <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>