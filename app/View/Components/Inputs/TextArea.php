<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $model;
    public $inputLabel;
    public $inputName;
    public $required;
    public $infoMessage;
    public $cols;
    public $rows;
    public $class;
    public $max;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model,$inputName,$required=false,$infoMessage="",$cols=30,$rows=10,$class=null,$inputLabel=null,$max=null,$id=null)
    {
        $this->model = $model;
        $this->inputLabel = $inputLabel;
        $this->inputName = $inputName;
        $this->required = $required;
        $this->infoMessage = $infoMessage;
        $this->cols = $cols;
        $this->rows = $rows;
        $this->class = $class;
        $this->max = $max;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.text-area');
    }
}
