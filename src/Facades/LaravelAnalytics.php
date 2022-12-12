<?php

namespace Kylekanderson\LaravelAnalytics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kylekanderson\LaravelAnalytics\LaravelAnalytics
 */
class LaravelAnalytics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kylekanderson\LaravelAnalytics\LaravelAnalytics::class;
    }
}
