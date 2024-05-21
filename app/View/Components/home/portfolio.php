<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class portfolio extends Component
{

    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'title' => 'Frigidaire',
                'category' => ['Professional Work', 'Angular', 'Bootstrap'],
                'description' => 'This is the main site I work on for my full-time position at Electrolux. It is an ecommerce site for Frigidaire appliances.',
                'repoAvailable' => false,
                'repoLink' => '',
                'deployedSite' => 'https://www.frigidaire.com/en/',
                'image' => 'img/portfolio/Frigidaire.PNG',
                'altText' => 'Frigidaire Ecommerce Homepage',
                'projectType' => 'Professional Work'
            ],
            [
                'title' => 'Electrolux',
                'category' => ['Professional Work', 'Angular', 'Bootstrap'],
                'description' => 'This is a site I regularly work on for my full-time position at Electrolux. It is an ecommerce site for Electrolux appliances.',
                'repoAvailable' => false,
                'repoLink' => '',
                'deployedSite' => 'https://www.electrolux.com/en/',
                'image' => 'img/portfolio/Electrolux.PNG',
                'altText' => 'Electrolux Ecommerce Homepage',
                'projectType' => 'Professional Work'
            ],
            [
                'title' => 'Bnb Network',
                'category' => ['Personal Project', 'React', 'Tailwind'],
                'description' => 'This is a Full Stack Bed and Breakfast website that was inspired by AirBnb. Users can register, login, create bnb locations, book trips to existing locations, and view complete trip history. UI was made mostly with the Daisy UI Tailwind Library',
                'repoAvailable' => true,
                'repoLink' => 'https://github.com/huntersteffner/bnb-network',
                'deployedSite' => 'https://bnb-network.vercel.app/',
                'image' => 'img/portfolio/Bnb-Network.png',
                'altText' => 'BNB Network - A mockup of a room sharing website',
                'projectType' => 'Personal Project'
            ],
        ];

        $this->tabs = ['Professional Work', 'Personal Projects', 'React', 'Angular','Bootstrap','Tailwind'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
