<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EspacePublic extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string title
     * @return void
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $title = $this->title;
        return view('components.espace-public');
    }
}
