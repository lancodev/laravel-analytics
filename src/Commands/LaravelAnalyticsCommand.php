<?php

namespace Lancodev\LaravelAnalytics\Commands;

use Illuminate\Console\Command;

class LaravelAnalyticsCommand extends Command
{
    public $signature = 'laravel-analytics';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
