<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $back;
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $action = 'javascript:void(0)',
        $back = false,
        $method = 'POST'
    ) {
        $this->action = $action;
        $this->back = $back;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
