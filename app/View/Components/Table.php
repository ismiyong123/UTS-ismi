<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $isi1;
    public $isi2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isi1, $isi2)
    {
        $this->isi1 = $isi1;
        $this->isi2 = $isi2;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
