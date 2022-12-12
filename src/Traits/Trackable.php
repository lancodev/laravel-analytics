<?php

namespace Lancodev\LaravelAnalytics\Traits;

trait Trackable
{
    public function trackable()
    {
        return $this->morphTo();
    }
}
