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
    public string $browser;

    public string $device;

    public string $ip;

    public string $session;

    public string $source;

    public string $uri;

    public string $visited_at;

    public string $left_at;

    protected $guarded = ['id'];

    protected $casts = [
        'visited_at' => 'datetime',
        'left_at' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

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
