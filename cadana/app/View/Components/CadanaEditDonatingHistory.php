<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CadanaEditDonatingHistory extends Component
{
    public $params;
    public $thegender;
    /**thegender
     * Create a new component instance.
     */
    public function __construct($params, $thegender)
    {
        $this->params = $params;
        $this->thegender = $thegender;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cadana-edit-donating-history');
    }
}
