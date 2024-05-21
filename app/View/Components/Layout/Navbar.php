<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public string $testString = 'hola';
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Home', 'download' => false, 'url' => '/'],
            ['label' => 'Portfolio', 'download' => false, 'url' => '/portfolio'],
            ['label' => 'Contact', 'download' => false, 'url' => '/contact'],
            ['label' => 'Resume', 'download' => true, 'url' => 'Matthew-Hunter-Steffner-Resume.pdf'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.navbar');
    }
}
