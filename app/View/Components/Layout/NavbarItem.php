<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarItem extends Component
{
    public string $navbarItemStyles = 'text-gray-900 py-2 px-4 rounded hover:bg-gray-700 lg:border-0 lg:px-3 dark:text-white lg:dark:hover:text-white dark:hover:bg-gray-700';
    /**
     * Create a new component instance.
     */
    public function __construct(public array $navigationItem)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.navbar-item');
    }
}
