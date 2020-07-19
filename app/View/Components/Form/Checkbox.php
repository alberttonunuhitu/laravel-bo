<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public $id;
    public $label;
    public $name;
    public $options;
    public $values;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Checkbox',
        $name = 'checkbox',
        array $options = array(['text' => 'Checkbox 1', 'value' => 1], ['text' => 'Checkbox 2', 'value' => 2]),
        array $values = array(),
        bool $required = false
    ) {
        $this->id = Str::camel('input_' . $name);
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->values = $values;
        $this->required = $required;
    }

    public function isChecked($option)
    {
        return in_array($option, $this->values);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.checkbox');
    }
}
