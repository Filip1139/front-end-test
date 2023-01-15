<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stats extends Component
{
    public $stats_list;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->stats_list = get_sub_field( 'stats_list' );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stats');
    }
}
