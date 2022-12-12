<?php

namespace Lancodev\LaravelAnalytics;

use Lancodev\LaravelAnalytics\Components\Analytics;
use Lancodev\LaravelAnalytics\Components\Chart;
use Lancodev\LaravelAnalytics\Components\Dashboard;
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
            ->hasViews()
            ->hasViewComponents('analytics', Analytics::class, Dashboard::class, Chart::class)
            ->hasRoute('web')
            ->hasMigration('create_page_views_table')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->startWith(function (InstallCommand $command) {
                        $command->info('Thanks for installing Laravel Analytics!');
                    })
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('lancodev/laravel-analytics')
                    ->endWith(function (InstallCommand $command) {
                        $command->info('All done! Enjoy using Laravel Analytics!');
                    });
            });
    }
}
