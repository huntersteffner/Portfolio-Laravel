<?php

namespace App\View\Components\Portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortfolioCard extends Component
{
    public string $link = '';
    public string $repoLink = '';
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $item
        )
    {
        $this->link = $item['deployedSite'];
        $this->repoLink = $item['repoLink'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.portfolio.portfolio-card');
    }
}
