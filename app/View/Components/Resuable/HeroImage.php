<?php

namespace App\View\Components\Resuable;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroImage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $altText,
        public string $header
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resuable.hero-image');
    }
}
