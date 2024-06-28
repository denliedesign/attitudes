<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Keyword extends Component
{
    public $title;
    public $description;
    public $head1;
    public $head2;
    public $head3;
    public $content1;
    public $content2;
    public $content3;
    public $image1;
    public $image2;
    public $image3;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $head1, $head2, $head3, $content1, $content2, $content3, $image3, $image2, $image1)
    {
        $this->title = $title;
        $this->description = $description;
        $this->head1 = $head1;
        $this->head2 = $head2;
        $this->head3 = $head3;
        $this->content1 = $content1;
        $this->content2 = $content2;
        $this->content3 = $content3;
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.keyword');
    }
}
