<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Status extends Component
{

    public $type;
    public $title;
    public $number;
    public $growth;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $title
     * @param $number
     * @param $growth
     */
    public function __construct($type, $title, $number, $growth)
    {
        $this->type = $type;
        $this->title = $title;
        $this->number = $number;
        $this->growth = $growth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.status');
    }
}
