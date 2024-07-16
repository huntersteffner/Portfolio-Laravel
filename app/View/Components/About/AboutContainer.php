<?php

namespace App\View\Components\About;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutContainer extends Component
{
    public $paragraphs = array(
        'I was born and raised in Atlanta, Georgia and currently live in Charlotte, North Carolina with my beautiful Peruvian wife.',
        'I completed my undergradate degree at Georgia Southern University in 2017 with a Major in Logistics and Minor in Spanish. (Sí, puedo
        hablar y trabajar en español, si es necesario).',
        'After college I began to work at NCR Corporation as a
        Customer Service Representative for Digital Banking Software. My company\'s proprietary software fascinated me, and I wanted to better understand what I was working with, so I started studying how computers functioned behind the scenes. While I looked into several different computer topics, I really found my niche when I began understanding the basics of Web Development with HTML, CSS, and JavaScript.',
        'After 4.5 years at NCR, I decided to make a career
        change and enrolled in a Full-Stack Coding Bootcamp at Georgia Tech. After completing this course, I worked for a few months as a part-time Teaching Assistant, at a Coding Bootcamp very similar to the one I had studied under. In March 2023, I accepted an offer for a full-time position at Electrolux as an E-Commerce Web Developer.',
        'I\'m here to fulfill any Web Development requests you have. I understand how to work with both the Frontend and Backend. Frameworks of projects I have worked on include Angular, React, Springboot, Laravel, and more. Feel free to check out my projects tab to see what I have been working
        on.',
        'If you\'d like for me to make your project a success, don\'t hesitate to reach out to me below.'
    );
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.about-container');
    }
}
