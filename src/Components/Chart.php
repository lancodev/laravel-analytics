<?php

namespace Kylekanderson\LaravelAnalytics\Components;

use Illuminate\View\Component;

class Chart extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('analytics::components.chart');
    }
}
