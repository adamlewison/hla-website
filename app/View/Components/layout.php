<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class layout extends Component
{

    public $activePage;
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct(string $activePage, string $title)
    {
        $this->activePage = $activePage;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
