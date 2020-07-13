<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Radio extends Component
{
    public $id;
    public $name;
    public $label;
    public $options;
    public $value;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $options = array(['text' => 'Radio 1', 'value' => 1], ['text' => 'Radio 2', 'value' => 2]),
        $name = 'radio_options',
        $label = 'Radio Options',
        $value = 1,
        $required = false
    ) {
        $this->id = Str::camel('input_' . $name);
        $this->options = $options;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
    }

    public function isChecked($option)
    {
        return $option == $this->value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.radio');
    }
}
