@auth
    <a href="{{ route('dashboard') }}" class="mr-2 py-2 text-amber-600">
        🙏Tashi delek, {{ Auth::user()->name }}
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}"
            class="rounded bg-amber-600 py-2 px-3 text-primary transition duration-300 hover:bg-red-600 hover:text-white"
            onclick="event.preventDefault();
        this.closest('form').submit();">
            Log Out
        </a>
    </form>
@endauth

@guest
    <a href="{{ route('login') }}" class="py-1 px-3 transition-all duration-300 hover:text-amber-600">Login</a>
    <a href="{{ route('register') }}"
        class="rounded bg-amber-600 my-1 py-1 px-3 text-primary transition duration-300 hover:bg-amber-500 hover:text-red-900">
        Register
    </a>
@endguest
