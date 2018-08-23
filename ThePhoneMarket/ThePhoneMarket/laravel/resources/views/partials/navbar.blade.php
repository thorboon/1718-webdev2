<!-- <nav class="navbar navbar-dark fixed-top bg-blue flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">{{ config('app.name') }}</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{ route('login') }}">Log in</a>
        </li>
    </ul>
</nav> -->

<nav class="navbar navbar-expand-md navbar-dark bg-blue fixed-top">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/">{{ config('app.name') }}</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        @if(Auth::check())
            <li class="nav-item navbar-text">
                {{ Auth::user()->fullName() }}
            </li>
            <li class="ml-2 nav-item navbar-text text-nowrap">
                <a href="{{ route('logout') }}">
                    Logout
                </a>
            </li>
        @else
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('login') }}">Log in</a>
            </li>
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        @endif
    </ul>
</nav>