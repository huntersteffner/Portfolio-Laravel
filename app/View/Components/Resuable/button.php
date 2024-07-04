<?php

namespace App\View\Components\resuable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    public string $buttonColor = 'secondary';
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
        if ($isPrimary)
        {
            $this->buttonColor = 'primary';
        }
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resuable.button');
    }
}
