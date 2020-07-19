<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Radio extends Component
{
    public $id;
    public $label;
    public $name;
    public $options;
    public $value;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Radio Button',
        $name = 'radio_button',
        array $options = array(
            ['text' => 'Radio Option 1', 'value' => 1],
            ['text' => 'Radio Option 2', 'value' => 2]
        ),
        $value = 1,
        bool $required = false
    ) {
        $this->id = Str::camel('input_' . $name);
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
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
