<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Display extends Component
{
    public $graphic;
    public $jr;
    /**
     * Create a new component instance.
     */
    public function __construct($graphic, $jr)
    {
        $this->graphic = $graphic;
        $this->jr = $jr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.display');
    }
}
