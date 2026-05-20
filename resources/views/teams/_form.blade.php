{{-- Campo nombre --}}
<div class="mb-4">
    <label for="name" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
        Nombre
    </label>
    <input type="text" name="name" id="name" value="{{ old('name', $team->name ?? '') }}"
        class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
    @error('name')
        <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Campo bandera --}}
<div class="mb-6">
    <label for="flag" class="font-barlow font-bold text-xs uppercase tracking-widest text-gray-500 block mb-1">
        Bandera (URL)
    </label>
    <input type="text" name="flag" id="flag" value="{{ old('flag', $team->flag ?? '') }}"
        class="w-full border-2 border-gray-200 rounded px-3 py-2 font-noto text-sm text-gray-900 focus:outline-none focus:border-blue-800">
    @error('flag')
        <p class="font-noto text-xs text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>