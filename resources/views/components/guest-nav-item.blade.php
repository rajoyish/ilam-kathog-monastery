@props(['active'])

@php
    $classes = $active ?? false ? 'block py-2 px-3 transition-all duration-300 hover:bg-yellow-600 hover:text-black bg-green-600' : 'block py-2 px-3 transition-all duration-300 hover:bg-yellow-600 hover:text-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
