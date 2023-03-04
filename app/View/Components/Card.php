<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $title;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = '', $title = '', $image = 'sampul.jpg')
    {
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
