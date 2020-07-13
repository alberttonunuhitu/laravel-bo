<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $id;
    public $type;
    public $label;
    public $variant;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $id = '',
        $type = 'button',
        $label = 'Button',
        $variant = 'primary',
        $link = 'javascript:void(0)'
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->label = $label;
        $this->variant = $variant;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
