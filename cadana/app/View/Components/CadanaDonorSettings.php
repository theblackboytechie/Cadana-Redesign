<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CadanaDonorSettings extends Component
{
    public $params;
    public $params2;
    /**
     * Create a new component instance.
     */
    public function __construct($params, $params2)
    {
        $this->params = $params;
        $this->params2 = $params2;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cadana-donor-settings');
    }
}
