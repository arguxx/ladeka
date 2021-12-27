<nav class="navbar mt-4 mx-5">
    <div class="navbar-brand">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
        </a>
    </div>
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>
                <a style="color: black" :href="route('logout')"
                onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{-- {{ __('Log Out') }} --}}
                Log Out</a>
            </button>
            </form>
        </div>
        <div class="p-2"><a href="{{ route('dashboard') }}" style="color: black"> Dashboard </a></div>
    </div>
</nav>

