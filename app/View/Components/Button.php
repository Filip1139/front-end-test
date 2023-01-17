<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $title;
    public $url;
    public $target;
    public $as;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary', $title = '', $url = '', $target = '', $as = 'link', $class = '')
    {
        $this->type = $type;
        $this->title = $title;
        $this->url = $url;
        $this->target = $target;
        $this->as = $as;
        $this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
