<?php

namespace App\View\Components\Portfolio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortfolioContainer extends Component
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
                'description' => 'This is the main site I work on for my full-time position at Electrolux. It is an E-commerce site for Frigidaire appliances.',
                'repoAvailable' => false,
                'repoLink' => '',
                'deployedSite' => 'https://www.frigidaire.com/en/',
                'image' => 'img/portfolio/Frigidaire.jpg',
                'altText' => 'Frigidaire Ecommerce Homepage',
                'projectType' => 'Professional Work'
            ],
            [
                'title' => 'Electrolux',
                'category' => ['Professional Work', 'Angular', 'Bootstrap'],
                'description' => 'This is a site I regularly work on for my full-time position at Electrolux. It is an E-commerce site for Electrolux appliances.',
                'repoAvailable' => false,
                'repoLink' => '',
                'deployedSite' => 'https://www.electrolux.com/en/',
                'image' => 'img/portfolio/Electrolux.jpg',
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
                'image' => 'img/portfolio/Bnb-Network.jpg',
                'altText' => 'BNB Network - A mockup of a room sharing website',
                'projectType' => 'Personal Project'
            ],
            [
                'title' => 'The Local Gym',
                'category' => ['Personal Project', 'React', 'Tailwind'],
                'description' => 'A gym website template ready to be adjusted to suit other website\'s needs. Can be used for freelance work.',
                'repoAvailable' => true,
                'repoLink' => 'https://github.com/huntersteffner/Gym',
                'deployedSite' => 'https://huntersteffner.github.io/Gym/',
                'image' => 'img/portfolio/Local-Gym.jpg',
                'altText' => 'A mockup of a Gym Website',
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
        return view('components.portfolio.portfolio-container');
    }
}
