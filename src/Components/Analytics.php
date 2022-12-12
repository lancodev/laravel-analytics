<?php

namespace Lancodev\LaravelAnalytics\Components;

use Illuminate\View\Component;
use Jenssegers\Agent\Agent;
use Lancodev\LaravelAnalytics\PageView;

class Analytics extends Component
{
    public $pageView;

    public function __construct($trackable = null)
    {
        $agent = new Agent();

        $this->pageView = new PageView([
            'uri' => request()->path(),
            'session' => session()->getId(),
            'source' => request()->headers->get('referer'),
            'ip' => request()->ip(),
            'browser' => $agent->browser(),
            'device' => $agent->device(),
            'visited_at' => now(),
        ]);

        if ($trackable) {
            $this->pageView->trackable()->associate($trackable);
        }

        $this->pageView->save();
    }

    public function render()
    {
        return view('analytics::components.analytics');
    }
}
