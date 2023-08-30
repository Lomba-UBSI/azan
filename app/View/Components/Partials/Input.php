<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $placeholder;
    public $type;
    public $name;
    public $class;
    public $options;
    public $selected;
    public $model;
    public $default;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $label = null, $type = null, $class = null, $options = [], $selected = null, $model = null, $placeholder = null, $default = null)
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->name = $name;
        $this->default = $default;
        $this->class = $class;
        $this->selected = $selected;
        if (count($options) == 0 && $model != null) {
            $this->options = $model;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.input');
    }

    public function isSelected($option)
    {
        return $option === $this->selected;
    }
}
