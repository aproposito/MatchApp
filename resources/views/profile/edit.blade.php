<x-app-layout>
    <x-slot name="header">
        <h2 class="font-oswald font-semibold text-2xl uppercase tracking-wide text-gray-900 leading-tight">
            Perfil
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-6 bg-white shadow-sm sm:rounded-md">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-6 bg-white shadow-sm sm:rounded-md">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <div class="p-6 bg-white shadow-sm sm:rounded-md">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>