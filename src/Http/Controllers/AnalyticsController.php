<?php

namespace Lancodev\LaravelAnalytics\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Lancodev\LaravelAnalytics\Jobs\UpdatePageView;
use Lancodev\LaravelAnalytics\PageView;

class AnalyticsController
{
    public function registerPageEnter(Request $request)
    {
        $pageView = PageView::find($request->pageViewId);

        if ($pageView) {
            UpdatePageView::dispatch($pageView, [
                'left_at' => null,
            ]);
        }
    }

    public function registerPageLeave(Request $request)
    {
        $pageView = PageView::find($request->pageViewId);

        if ($pageView) {
            $timestamp = Carbon::createFromTimestampMs($request->timestamp);
            UpdatePageView::dispatch($pageView, [
                'left_at' => $timestamp,
            ]);
        }
    }
}
