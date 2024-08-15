<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $label , $name , $collection, $spanStar;

    public function __construct($label , $name ,$collection , $spanStar)
    {
        $this->label = $label;
        $this->name = $name;
        $this->collection = $collection;
        $this->spanStar = $spanStar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select-component');
    }
}
