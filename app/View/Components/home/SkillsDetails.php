<?php

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillsDetails extends Component
{

    public array $skills = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->skills = [
            [
                'skill' => 'JavaScript/TypeScript',
                'description' => 'My first programming language',
                'image' => 'img/skills/JavaScript-logo.png',
                'altText' => 'Javascript Logo'
            ],
            [
                'skill' => 'Angular',
                'description' => 'Framework I use at my full-time job.',
                'image' => 'img/skills/Angular_logo.png',
                'altText' => 'Angular Logo'
            ],
            [
                'skill' => 'React',
                'description' => 'My first framework',
                'image' => 'img/skills/React-icon.png',
                'altText' => 'React Logo'
            ],
            [
                'skill' => 'MySQL',
                'description' => 'Blank',
                'image' => 'img/skills/MySQL-logo.png',
                'altText' => 'MySQL Logo'
            ],
            [
                'skill' => 'PHP',
                'description' => 'Blank',
                'image' => 'img/skills/PHP-logo.png',
                'altText' => 'PHP Logo'
            ],
            [
                'skill' => 'Laravel',
                'description' => 'Used to make this website',
                'image' => 'img/skills/Laravel-logo.png',
                'altText' => 'Laravel Logo'
            ],
            [
                'skill' => 'Node JS',
                'description' => 'Blank',
                'image' => 'img/skills/Nodejs-logo.png',
                'altText' => 'Node JS Logo'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.skills-details');
    }
}
