<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ThumbnailPreview extends Component
{
    public $model;
    public $routeInfo;
    public $image;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model,$routeInfo='get.thumbnail',$image='image')
    {
        $this->model = $model;
        $this->routeInfo = $routeInfo;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.thumbnail-preview');
    }
}
