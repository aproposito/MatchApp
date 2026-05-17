<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ranking') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <thead>
                    <tr>
                        <th>Posición</th>
                        <th>Nombre</th>
                        <th>Puntos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->total_points }}
                        </td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>