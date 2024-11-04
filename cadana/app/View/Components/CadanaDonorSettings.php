<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CadanaDonorSettings extends Component
{
    public $params;
    public $params2;
    public $thegender;
    /**
     * Create a new component instance.
     */
    public function __construct($params, $params2, $thegender)
    {
        $this->params = $params;
        $this->params2 = $params2;
        $this->thegender = $thegender;
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
