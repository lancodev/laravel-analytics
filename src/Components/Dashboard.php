<?php

namespace Kylekanderson\LaravelAnalytics\Components;

use Illuminate\View\Component;
use Kylekanderson\LaravelAnalytics\PageView;

class Dashboard extends Component
{
    public $uriVisits;

    public $browsers;

    public $devices;

    public function __construct()
    {
        $this->uriVisits = PageView::pluck('uri')->countBy()->sortDesc();
        $this->browsers = PageView::pluck('browser')->countBy()->sortDesc();
        $this->devices = PageView::pluck('device')->countBy()->sortDesc();
    }

    public function render()
    {
        return view('analytics::components.dashboard');
    }
}
