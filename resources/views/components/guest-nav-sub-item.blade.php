@props(['active'])

@php
    $classes = $active ?? false ? 'block bg-red-900 py-2 pl-6 transition-all duration-300 hover:bg-amber-600 hover:text-white' : 'block bg-red-900 py-2 pl-6 transition-all duration-300 hover:bg-amber-600 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
