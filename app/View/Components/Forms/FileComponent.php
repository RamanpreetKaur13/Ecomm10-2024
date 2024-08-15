<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $label , $name,$dimension , $spanStar ;

    public function __construct($label , $name,$dimension ,$spanStar)
    {
        $this->label = $label;
        $this->name = $name;
        $this->dimension = $dimension;
        $this->spanStar = $spanStar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.file-component');
    }
}
