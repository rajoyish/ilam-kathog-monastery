@php
    $segment1 = Request::segment(1);
    $pages = ['about-monastery'];
@endphp
<a href="/" class="block py-2 px-3 transition-all duration-300 hover:bg-amber-600 hover:text-white">Home</a>
<span x-data="{ openSubmenu: false }" href="#"
    class="relative transition-all duration-300 hover:bg-amber-600 hover:text-white">
    <span x-on:click="openSubmenu = ! openSubmenu"
        class="flex items-center  py-2 px-3 cursor-pointer @if (in_array($segment1, $pages)) bg-amber-600 @endif">
        <span>About us</span>
        <x-icons.chevron-down />
    </span>
    <nav x-show="openSubmenu" @click.away="openSubmenu = false" :class=" openSubmenu ? '' : 'hidden'"
        class="absolute z-10 w-full transition-all duration-300 md:w-96">
        <x-guest-nav-sub-item :href="route('about-monastery')" :active="request()->routeIs('about-monastery')">
            About the Monastery
        </x-guest-nav-sub-item>
        <x-guest-nav-sub-item :href="route('committee')" :active="request()->routeIs('committee')">
            Committee
        </x-guest-nav-sub-item>
    </nav>

</span>
<x-guest-nav-item href="#">News</x-guest-nav-item>
<x-guest-nav-item :href="route('albums.index')" :active="request()->routeIs('albums.index')">Gallery</x-guest-nav-item>
<x-guest-nav-item href="#">Donation</x-guest-nav-item>
<x-guest-nav-item href="#">Contact</x-guest-nav-item>
