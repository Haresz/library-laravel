<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $label;
    public $value;
    public $image;
    public $disabled;
    public $required;
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name = '', $label = '', $type = 'text', $value = '', $image = '', $disabled = false, $required = false, $placeholder = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
        $this->image = $image;
        $this->disabled = $disabled;
        $this->required = $required;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
