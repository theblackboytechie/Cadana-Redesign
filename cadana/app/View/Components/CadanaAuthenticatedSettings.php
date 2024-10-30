<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CadanaAuthenticatedSettings extends Component
{
    public $owner;
    public $params;
    /**
     * Create a new component instance.
     */
    public function __construct($params, $owner)
    {
        $this->owner = $owner;
        $this->params = $params;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cadana-authenticated-settings');
    }
}
