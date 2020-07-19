<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $id;
    public $label;
    public $name;
    public $value;
    public $placeholder;
    public $help_block;
    public $description;
    public $autofocus;
    public $readonly;
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type = 'text',
        $label = 'Example',
        $name = 'example',
        $value = '',
        $placeholder = '',
        $description = '',
        bool $autofocus = false,
        bool $readonly = false,
        bool $required = false
    ) {
        $this->type = $type;
        $this->id = Str::camel('input_' . $name);
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->help_block = Str::camel($name . '_Help_Block');
        $this->description = $description;
        $this->autofocus = $autofocus;
        $this->readonly = $readonly;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
