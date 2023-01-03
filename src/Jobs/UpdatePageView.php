<?php

namespace Lancodev\LaravelAnalytics\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Lancodev\LaravelAnalytics\PageView;

class UpdatePageView implements \Illuminate\Contracts\Queue\ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $pageView;

    public $attributes;

    public function __construct(PageView $pageView, array $attributes)
    {
        $this->pageView = $pageView;
        $this->attributes = $attributes;
    }

    public function handle()
    {
        $this->pageView->update($this->attributes);
    }
}
