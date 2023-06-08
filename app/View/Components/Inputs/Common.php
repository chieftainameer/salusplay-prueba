<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Common extends Component
{
    public $model;
    public $inputLabel;
    public $inputName;
    public $inputType;
    public $required;
    public $infoMessage;
    public $class;
    public $pattern;
    public $maxLength;
    public $size;
    public $min;
    public $max;
    public $disable;
    public $inputWidth;
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model,$inputName,
                                $inputType,$infoMessage,$inputLabel=null,$required=false,$class=null,$pattern=null,$maxLength=null,$size=null,$min=3,$max=10,$disable=null,$inputWidth=null,$placeholder=null)
    {
        $this->model = $model;
        $this->inputLabel = $inputLabel;
        $this->inputName = $inputName;
        $this->inputType = $inputType;
        $this->required = $required;
        $this->infoMessage = $infoMessage;
        $this->class = $class;
        $this->pattern = $pattern;
        $this->maxLength = $maxLength;
        $this->min = $min;
        $this->max = $max;
        $this->size = $size;
        $this->disable = $disable;
        $this->inputWidth = $inputWidth;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.common');
    }
}
