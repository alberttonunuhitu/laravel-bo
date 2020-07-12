<?php

namespace App\View\Components\Breadcrumb;

use Illuminate\View\Component;

class Item extends Component
{
    public $label;
    public $link;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Breadcrumb',
        $link = 'javascript:void(0)',
        $active = false
    ) {
        $this->label = $label;
        $this->link = $link;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumb.item');
    }
}
