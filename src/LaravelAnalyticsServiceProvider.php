<?php

namespace Kylekanderson\LaravelAnalytics;

use Kylekanderson\LaravelAnalytics\Components\Analytics;
use Kylekanderson\LaravelAnalytics\Components\Chart;
use Kylekanderson\LaravelAnalytics\Components\Dashboard;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAnalyticsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-analytics')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents('analytics', Analytics::class, Dashboard::class, Chart::class)
            ->hasRoute('web')
            ->hasMigration('create_page_views_table')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('kylekanderson/laravel-analytics');
            });
    }
}
