@guest
    <a href="{{ route('filament.auth.login') }}" class="py-1 px-3 transition-all duration-300 hover:text-amber-600">Login</a>
@endguest
@auth
    <a href="/admin"
        class="inline-flex items-center rounded-sm border border-gray-300 bg-white px-4 py-1 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        Tashi Delek, {{ Auth::user()->name }}
    </a>
@endauth
