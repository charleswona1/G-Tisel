<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroup extends Component
{
    public $class;
    public $id;
    public $style;
    public $label;
    public $name;
    public $optionnal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = null, $id = null, $style = null, $label = null, $name = null, $optionnal = null)
    {
        $this->class = $class;
        $this->id = $id;
        $this->style = $style;
        $this->label = $label;
        $this->name = $name;
        $this->optionnal = $optionnal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $class = $this->class;
        $id = $this->id;
        $style = $this->style;
        $label = $this->label;
        $name = $this->name;
        $optionnal = $this->optionnal;
        return view('components.form-group', compact('class', 'id', 'style', 'label', 'name', 'optionnal'));
    }
}
