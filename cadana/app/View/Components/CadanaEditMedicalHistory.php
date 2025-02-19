<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CadanaEditMedicalHistory extends Component
{
    public $params;
    /**
     * Create a new component instance.
     */
    public function __construct($params)
    {
        $this->params = $params;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cadana-edit-medical-history');
    }
}
