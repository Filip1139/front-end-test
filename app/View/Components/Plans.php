<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Plans extends Component
{
    public $title;
    public $description;
    public $plans_list;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->title = get_sub_field( 'title' );
        $this->description = get_sub_field( 'description' );
        $this->plans_list = get_sub_field( 'plans_list' );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.plans');
    }
}
