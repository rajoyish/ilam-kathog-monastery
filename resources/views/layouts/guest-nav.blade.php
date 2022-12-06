<nav x-data="{ navOpen: false }" class="bg-red-900  text-white">
    <div class="mx-auto max-w-6xl px-4">
        <div class="flex justify-between">
            <div class="flex space-x-4">
                <!-- Mobile Login Link -->
                <div class="flex items-center md:hidden">

                    {{-- LOGIN & REGISTER BUTTONS --}}
                    <x-btn-login-register />

                </div>

                <!-- primary nav -->
                <div class="hidden items-center space-x-1 md:flex">

                    {{-- HOME NAV LINKS --}}
                    <x-guest-nav-links />

                </div>
            </div>

            <!-- secondary nav -->
            <div class="hidden items-center space-x-1 md:flex">

                {{-- LOGIN & REGISTER BUTTONS --}}
                <x-btn-login-register />
            </div>

            <!-- mobile button goes here -->
            <div class="flex items-center md:hidden">
                <button @click="navOpen = !navOpen">
                    <x-icons.hemburger />
                </button>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div x-show="navOpen" @click.away="navOpen = false" x-bind:class=" navOpen ? '' : 'hidden'" class="md:hidden">

        {{-- HOME NAV LINKS --}}
        <x-guest-nav-links />

    </div>
</nav>
