<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class FileInput extends Component
{

    public $model;
    public $inputLabel;
    public $inputName;
    public $required;
    public $infoMessage;
    public $accept;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model,$inputLabel,$inputName,$required=false,$infoMessage='cards.thumbnail_help',$accept='image/*',$id=null)
    {
        $this->model = $model;
        $this->inputLabel = $inputLabel;
        $this->inputName = $inputName;
        $this->required = $required;
        $this->infoMessage = $infoMessage;
        $this->accept = $accept;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.file-input');
    }
}
