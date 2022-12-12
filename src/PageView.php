<?php

namespace Lancodev\LaravelAnalytics;

use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Properties
    |--------------------------------------------------------------------------
    */
    protected $guarded = ['id'];

    protected $casts = [
        'visited_at' => 'datetime',
        'left_at' => 'datetime',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */
    public function trackable()
    {
        return $this->morphTo();
    }
}
