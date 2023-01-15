<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{

    public $title;
    public $description;
    public $image;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
    */

    public function __construct()
    {
        $this->title = get_sub_field( 'title' );
      	$this->description = get_sub_field( 'description' );
      	$this->link = get_sub_field( 'link' );
      	$this->image = get_sub_field( 'image' );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
