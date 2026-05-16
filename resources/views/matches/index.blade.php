<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Partidos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('matches.create') }}">Crear partido</a>

            <table>
                <thead>
                    <tr>
                        <th>Local</th>
                        <th>Visitante</th>
                        <th>Fase</th>
                        <th>Fecha y hora</th>
                        <th>Resultado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matches as $match)
                    <tr>
                        <td>
                            @if($match->homeTeam->flag)
                                <img src="{{ $match->homeTeam->flag }}" class="h-5 w-auto inline mr-1">
                            @endif
                            {{ $match->homeTeam->name }}
                        </td>
                        <td>
                            @if($match->awayTeam->flag)
                                <img src="{{ $match->awayTeam->flag }}" class="h-5 w-auto inline mr-1">
                            @endif
                            {{ $match->awayTeam->name }}
                        </td>
                        <td>{{ $match->phase }}</td>
                        <td>{{ $match->match_date_time }}</td>
                        <td>
                            @if($match->final_home_goals !== null)
                                {{ $match->final_home_goals }} - {{ $match->final_away_goals }}
                            @else
                                —
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('matches.edit', $match) }}">Editar</a>
                            <form action="{{ route('matches.destroy', $match) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>