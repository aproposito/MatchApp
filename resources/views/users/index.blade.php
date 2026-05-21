<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Usuarios
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm overflow-hidden">

                {{-- Cabecera --}}
                <div class="grid grid-cols-12 px-4 py-2 bg-gray-900">
                    <div class="col-span-4 font-barlow font-bold text-xs uppercase tracking-widest text-white">Nombre</div>
                    <div class="col-span-4 font-barlow font-bold text-xs uppercase tracking-widest text-white">Email</div>
                    <div class="col-span-2 font-barlow font-bold text-xs uppercase tracking-widest text-white">Rol</div>
                    <div class="col-span-2 text-right font-barlow font-bold text-xs uppercase tracking-widest text-white">Acciones</div>
                </div>

                {{-- Filas --}}
                @foreach($users as $user)
                <div class="grid grid-cols-12 items-center px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition duration-100">

                    {{-- Nombre --}}
                    <div class="col-span-4">
                        <span class="font-oswald font-semibold text-sm uppercase tracking-wide text-gray-900">
                            {{ $user->name }}
                        </span>
                    </div>

                    {{-- Email --}}
                    <div class="col-span-4">
                        <span class="font-noto text-sm text-gray-500">
                            {{ $user->email }}
                        </span>
                    </div>

                    {{-- Rol --}}
                    <div class="col-span-2">
                        @if($user->role === 'admin')
                            <span class="font-barlow font-bold text-xs uppercase tracking-widest text-blue-800 bg-blue-100 px-2 py-0.5 rounded-full">Admin</span>
                        @else
                            <span class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">User</span>
                        @endif
                    </div>

                    {{-- Acciones --}}
                    <div class="col-span-2 flex justify-end items-center gap-3">
                        <a href="{{ route('users.edit', $user) }}"
                            class="font-barlow font-bold text-xs uppercase tracking-widest text-blue-800 hover:text-blue-900 transition duration-150">
                            Editar
                        </a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST"
                            onsubmit="return confirm('¿Eliminar {{ $user->name }}?')">
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