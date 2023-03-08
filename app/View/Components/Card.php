<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $admin;
    public $title;
    public $image;
    public $author;
    public $publisher;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = '', $admin = false, $title = '', $image = 'sampul.jpg', $author = '', $publisher = '')
    {
        $this->id = $id;
        $this->admin = $admin;
        $this->title = $title;
        $this->image = $image;
        $this->author = $author;
        $this->publisher = $publisher;
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
