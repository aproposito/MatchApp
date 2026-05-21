<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Editar usuario
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-md shadow-sm p-6">
                <form action="{{ route('users.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Nombre --}}
                    <div class="mb-4">
                        <label for="name" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
                            Nombre
                        </label>
                        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                            class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
                        @error('name')
                            <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-4">
                        <label for="email" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
                            Email
                        </label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                            class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
                        @error('email')
                            <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Rol --}}
                    <div class="mb-6">
                        <label for="role" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
                            Rol
                        </label>
                        <select name="role" id="role"
                            class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
                            <option value="user"  {{ old('role', $user->role) == 'user'  ? 'selected' : '' }}>Usuario</option>
                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        @error('role')
                            <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
                        @enderror
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