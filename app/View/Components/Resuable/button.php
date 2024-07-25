<?php

namespace App\View\Components\Resuable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $buttonColor = 'secondary';
    public string $buttonClasses = '';
    private string $textColor = 'text-black';
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
            $this->textColor = 'text-white';
        }

        $this->buttonClasses = 'inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center border-2 border-black border-solid ' . $this->textColor . ' rounded-lg bg-' . $this->buttonColor . '-700 hover:bg-' . $this->buttonColor . '-800 focus:ring-4 focus:ring-' . $this->buttonColor . '900';
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resuable.button');
    }
}
