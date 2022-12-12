<?php

use Illuminate\Support\Facades\Route;
use Lancodev\LaravelAnalytics\Http\Controllers\AnalyticsController;

Route::prefix('analytics')->group(function () {
    Route::post('/enter', [AnalyticsController::class, 'registerPageEnter']);
    Route::post('/leave', [AnalyticsController::class, 'registerPageLeave']);
});
