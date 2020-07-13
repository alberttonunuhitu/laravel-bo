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
    public $helpBlock;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Input Date',
        $name = 'datetimepicker',
        $value = '',
        $required = false
    ) {
        $this->id = Str::camel('input_' . $name);
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->required = $required;
        $this->helpBlock = Str::camel($name . '_Help_Block');
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
