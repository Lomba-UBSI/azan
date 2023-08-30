<?php

namespace App\Providers;

use App\View\Components\Layouts\Admin;
use App\View\Components\Layouts\Admin\Navbar as AdminNavbar;
use App\View\Components\Layouts\Admin\Sidebar;
use App\View\Components\Layouts\User;
use App\View\Components\Layouts\User\Footer;
use App\View\Components\Layouts\User\Navbar;
use App\View\Components\Partials\ApplicationLogo;
use App\View\Components\Partials\Dropdown;
use App\View\Components\Partials\DropdownLink;
use App\View\Components\Partials\Img;
use App\View\Components\Partials\Input;
use App\View\Components\Partials\Navigation;
use App\View\Components\Partials\NavLink;
use App\View\Components\Partials\ResponsiveNavLink;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('enduser', User::class);
        Blade::component('dashboard', Admin::class);
        Blade::component('sidebar', Sidebar::class);
        Blade::component('admin-navbar', AdminNavbar::class);
        Blade::component('navigation', Navigation::class);
        Blade::component('application-logo', ApplicationLogo::class);
        Blade::component('nav-link', NavLink::class);
        Blade::component('dropdown', Dropdown::class);
        Blade::component('user-navbar', Navbar::class);
        Blade::component('nav-dropdown', DropdownLink::class);
        Blade::component('responsive-nav-link', ResponsiveNavLink::class);
        Blade::component('footer', Footer::class);
        Blade::component('input', Input::class);
        Blade::component('img', Img::class);
    }
}
