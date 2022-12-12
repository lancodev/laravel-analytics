<?php

namespace Lancodev\LaravelAnalytics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lancodev\LaravelAnalytics\LaravelAnalytics
 */
class LaravelAnalytics extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lancodev\LaravelAnalytics\LaravelAnalytics::class;
    }
}
