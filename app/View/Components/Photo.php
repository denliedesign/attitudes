<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Photo extends Component
{
    public $tag;
    public $class;
    public $style;
    /**
     * Create a new component instance.
     */
    public function __construct($tag, $class, $style)
    {
        $this->tag = $tag;
        $this->class = $class;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.photo');
    }
}
