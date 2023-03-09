<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $id;
    public $image;
    public $title;
    public $author;
    public $publisher;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = '', $image = 'sampul.jpg', $title = '', $author = '', $publisher = '')
    {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
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
        return view('components.table');
    }
}
