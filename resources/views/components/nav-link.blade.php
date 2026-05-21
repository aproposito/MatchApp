@props(['active'])
@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-600 font-barlow font-bold text-sm uppercase tracking-wide text-white focus:outline-none transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-barlow font-bold text-sm uppercase tracking-wide text-white/60 hover:text-white hover:border-white/30 focus:outline-none transition duration-150 ease-in-out';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>