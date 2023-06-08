<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $model;
    public $inputName;
    public $inputLabel;
    public $inputLabel2;
    public $infoMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model,$inputName,$inputLabel, $infoMessage,$inputLabel2=null)
    {
        $this->model = $model;
        $this->inputName = $inputName;
        $this->inputLabel = $inputLabel;
        $this->inputLabel2 = $inputLabel2;
        $this->infoMessage = $infoMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.checkbox');
    }
}
