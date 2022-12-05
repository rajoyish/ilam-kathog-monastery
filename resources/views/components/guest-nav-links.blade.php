<a href="/" class="block py-2 px-3 transition-all duration-300 hover:bg-yellow-600 hover:text-black">Home</a>
<span x-data="{ openSubmenu: false }" href="#"
    class="relative transition-all duration-300 hover:bg-yellow-600 hover:text-black">
    <span x-on:click="openSubmenu = ! openSubmenu" class="flex items-center  py-2 px-3 cursor-pointer">
        <span>About us</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </span>
    <nav x-show="openSubmenu" @click.away="openSubmenu = false" :class=" openSubmenu ? '' : 'hidden'"
        class="absolute md:w-96 w-full transition-all duration-300 z-10">
        <a href="#"
            class="block py-2 transition-all pl-6 duration-300 bg-blue-500 hover:bg-red-500 hover:text-black">
            Introduction to SSK
        </a>
        <a href="#"
            class="block py-2 transition-all pl-6 duration-300 bg-blue-500 hover:bg-red-500 hover:text-black">
            Advisors
        </a>
        <a href="#"
            class="block py-2 transition-all pl-6 duration-300 bg-blue-500 hover:bg-red-500 hover:text-black">
            Executive Committee
        </a>

        <a href="#"
            class="block py-2 transition-all pl-6 duration-300 bg-blue-500 hover:bg-red-500 hover:text-black">
            Staffs
        </a>
    </nav>
</span>
<x-guest-nav-item href="#">News</x-guest-nav-item>
<x-guest-nav-item href="#">Gallery</x-guest-nav-item>
<x-guest-nav-item href="#">डोनेशन</x-guest-nav-item>
<x-guest-nav-item href="#">Contact</x-guest-nav-item>
