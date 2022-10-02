<?php

namespace Authanram\LaravelDragula;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Authanram\LaravelDragula\Commands\LaravelDragulaCommand;

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
