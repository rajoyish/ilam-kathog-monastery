@props(['active'])

@php
    $classes = $active ?? false ? 'block py-2 px-3 transition-all duration-300 hover:bg-amber-600 hover:text-white bg-green-600' : 'block py-2 px-3 transition-all duration-300 hover:bg-amber-600 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
