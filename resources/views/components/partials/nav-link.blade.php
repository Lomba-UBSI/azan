<li class="nav__item">
    <a href="{{ route($route) }}"
        class="nav__item-link {{ request()->routeIs($route) ? 'active' : '' }}">{{ $name }}</a>
</li>
