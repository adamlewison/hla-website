<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{

    public $activePage;
    
    /**
     * Create a new component instance.
     */
    public function __construct(string $activePage)
    {
        $this->activePage = $activePage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
