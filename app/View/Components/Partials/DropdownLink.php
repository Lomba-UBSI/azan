<?php

namespace App\View\Components\Partials;

use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownLink extends Component
{
    public $menu;
    /**
     * Create a new component instance.
     */
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.dropdown-link');
    }
}
