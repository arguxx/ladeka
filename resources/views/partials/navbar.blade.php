<nav class="navbar mt-4 mx-5">
    <a routerLink="/" class="navbar-brand" href="/dashboard"> <img src="logo/logo.png" style="width: 90px" alt=""></a>
    <div class="d-flex flex-row-reverse">
        <div class="p-2"><form method="POST" action="{{ route('logout') }}">
            @csrf
            <a style="color: black" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{-- {{ __('Log Out') }} --}}
        Log Out</a>
            </form>
        </div>
        <div class="p-2"><a href="/dashboard" style="color: black"> Dashboard </a></div>

    </div>
</nav>