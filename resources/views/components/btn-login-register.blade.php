@auth
    <a href="{{ route('dashboard') }}" class="mr-2 py-2 text-ace-gold">
        🙏Tashi delek, {{ Auth::user()->name }}
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}"
            class="rounded bg-yellow-600 py-2 px-3 text-primary transition duration-300 hover:bg-red-600 hover:text-black"
            onclick="event.preventDefault();
        this.closest('form').submit();">
            Log Out
        </a>
    </form>
@endauth

@guest
    <a href="{{ route('login') }}" class="py-1 px-3 transition-all duration-300 hover:text-ace-gold">Login</a>
    <a href="{{ route('register') }}"
        class="rounded bg-yellow-600 my-1 py-1 px-3 text-primary transition duration-300 hover:bg-red-600 hover:text-black">
        Register
    </a>
@endguest
