<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Textarea extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name = 'textarea',
        $label = 'Textarea',
        $value = '',
        $required = false
    ) {
        $this->id = Str::camel('input_' . $name);
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.textarea');
    }
}
