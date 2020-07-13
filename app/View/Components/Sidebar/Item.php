<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class Item extends Component
{
    public $label;
    public $icon;
    public $link;
    public $active;
    public $treeview;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Simple Link',
        $icon = 'circle',
        $link = 'javascript:void(0)',
        $active = false,
        $treeview = false
    ) {
        $this->label = $label;
        $this->icon = ($icon === 'circle') ? "far fa-{$icon}" : "fas fa-{$icon}";
        $this->link = !$treeview ? $link : 'javascript:void(0)';
        $this->active = $active;
        $this->treeview = $treeview;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar.item');
    }
}
