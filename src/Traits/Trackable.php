<?php

namespace Kylekanderson\LaravelAnalytics\Traits;

trait Trackable
{
    public function trackable()
    {
        return $this->morphTo();
    }
}
