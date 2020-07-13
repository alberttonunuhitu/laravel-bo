<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Select extends Component
{
    public $id;
    public $label;
    public $type;
    public $name;
    public $select2;
    public $required;
    public $placeholder;
    public $options;
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = 'Example Select',
        $type = 'text',
        $name = 'select',
        $select2 = false,
        $required = false,
        $placeholder = '',
        $options = array(
            ['text' => 'Option 1', 'value' => 1],
            ['text' => 'Option 2', 'value' => 2],
            ['text' => 'Option 3', 'value' => 3]
        ),
        $selected = '1'
    ) {
        $this->label = $label;
        $this->type = $type;
        $this->id = Str::camel('input_' . $name);
        $this->name = $name;
        $this->select2 = $select2;
        $this->required = $required;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->selected = $selected;
    }

    public function isSelected($option) {
        return $option == $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
