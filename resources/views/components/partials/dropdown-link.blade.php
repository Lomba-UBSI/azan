<li class="nav__item has-dropdown">
    <a href="{{ route($menu->route) }}" class="nav__item-link">{{ $menu->name }}</a>
    <button class="dropdown-toggle" data-toggle="dropdown"></button>
    <ul class="dropdown-menu">
        @foreach ($menu->subMenu as $sm)
            <li class="nav__item">
                <a href="{{ route($sm->route) }}" class="nav__item-link">{{ $sm->name }}</a>
            </li>
        @endforeach
    </ul>
</li>
