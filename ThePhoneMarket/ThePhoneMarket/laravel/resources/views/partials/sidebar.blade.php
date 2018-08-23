<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link{{ (Request::is('/') ? ' active' : '') }}" href="{{ route("home") }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ (Request::is(['auctions', 'auctions/create', 'auctions/*', 'auctions/*/edit']) ? ' active' : '') }}" href="{{ route("auctions.index") }}">
                    Veilingen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ (Request::is(['categories', 'categories/create', 'categories/*', 'categories/*/edit']) ? ' active' : '') }}" href="{{ route("categories.index") }}">
                    Categorieën
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link{{ (Request::is(['users', 'users/create', 'users/*', 'users/*/edit']) ? ' active' : '') }}" href="{{ route("users.index") }}">
                    Gebruikers
                </a>
            </li>
        </ul>
    </div>
</nav>