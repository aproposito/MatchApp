@props(['active'])
@php
$classes = ($active ?? false)
    ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-red-600 font-barlow font-bold text-sm uppercase tracking-wide text-white bg-white/10 focus:outline-none transition duration-150 ease-in-out'
    : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent font-barlow font-bold text-sm uppercase tracking-wide text-white/80 hover:text-white hover:bg-white/10 hover:border-white/30 focus:outline-none transition duration-150 ease-in-out';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>