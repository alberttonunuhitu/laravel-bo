<?php

namespace App\View\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Input extends Component
{
    public $id;
    public $label;
    public $type;
    public $name;
    public $value;
    public $placeholder;
    public $readonly;
    public $required;
    public $autofocus;
    public $description;
    public $helpBlock;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = "Example",
        $type = "text",
        $name = "example",
        $value = "",
        $placeholder = "",
        $readonly = false,
        $required = false,
        $autofocus = false,
        $description = ''
    ) {
        $this->label = $label;
        $this->type = $type;
        $this->id = Str::camel('input_' . $name);
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->readonly = $readonly;
        $this->required = $required;
        $this->autofocus = $autofocus;
        $this->description = $description;
        $this->helpBlock = Str::camel($name . '_Help_Block');
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
