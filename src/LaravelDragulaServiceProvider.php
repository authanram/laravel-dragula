<?php

namespace Authanram\LaravelDragula;

use Authanram\LaravelDragula\Commands\LaravelDragulaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDragulaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dragula')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-dragula_table')
            ->hasCommand(LaravelDragulaCommand::class);
    }
}
