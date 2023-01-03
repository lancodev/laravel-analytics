<?php

namespace Lancodev\LaravelAnalytics\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Lancodev\LaravelAnalytics\PageView;

class AnalyticsController
{
    public function registerPageEnter(Request $request)
    {
        $pageView = PageView::find($request->pageViewId);

        if ($pageView) {
            $pageView->update([
                'left_at' => null,
            ]);
        }
    }

    public function registerPageLeave(Request $request)
    {
        $pageView = PageView::find($request->pageViewId);

        if ($pageView) {
            $timestamp = Carbon::createFromTimestampMs($request->timestamp);
            $pageView->update([
                'left_at' => $timestamp,
            ]);
        }
    }
}
