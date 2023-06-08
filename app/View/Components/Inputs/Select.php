<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Select extends Component
{
    public $inputLabel;
    public $inputName;
    public $infoMessage;
    public $options;
    public $optionValue;
    public $optionName;
    public $optionSelected;
    public $required;
    public $size;
    public $id;
    public $selectType; // this indicates that if it is a simple select input looping over array or over an DB object
    public $model;
    public $disable;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputLabel,$inputName,
                                $infoMessage,$options,
                                $optionValue,$optionName,
                                $optionSelected,$required=false,
                                $size="col-md-9",$id='',
                                $selectType=null,$model=null,$disable=null,$class=null)
    {
        $this->inputLabel = $inputLabel;
        $this->inputName = $inputName;
        $this->infoMessage = $infoMessage;
        $this->options = $options;
        $this->optionValue = $optionValue;
        $this->optionName = $optionName;
        $this->optionSelected = $optionSelected;
        $this->required = $required;
        $this->size = $size;
        $this->id = $id;
        $this->selectType = $selectType;
        $this->model = $model;
        $this->disable = $disable;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.select');
    }
}
