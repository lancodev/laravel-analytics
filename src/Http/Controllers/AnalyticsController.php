<?php

namespace Kylekanderson\LaravelAnalytics\Http\Controllers;

use Illuminate\Http\Request;
use Kylekanderson\LaravelAnalytics\PageView;

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
            $pageView->update([
                'left_at' => now(),
            ]);
        }
    }
}
