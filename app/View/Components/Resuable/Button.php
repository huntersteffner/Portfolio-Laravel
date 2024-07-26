<?php

namespace App\View\Components\Resuable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $buttonClasses = '';
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $btnText,
        public string $btnLink,
        public bool $isPrimary,
        public bool $hasArrow,
        public bool $newTab
    )
    {

        $this->buttonClasses = 'inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center border-2 border-black border-solid rounded-lg focus:ring-4';
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resuable.button');
    }
}
