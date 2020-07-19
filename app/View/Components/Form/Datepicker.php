<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Datepicker extends Component
{
    public $id;
    public $label;
    public $name;
    public $value;
    public $required;
    public $help_block;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Datepicker',
        $name = 'datepicker',
        $value = '',
        bool $required = false
    ) {
        $this->id = Str::camel('input_' . $name);
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->required = $required;
        $this->help_block = Str::camel($name . '_Help_Block');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.datepicker');
    }
}
