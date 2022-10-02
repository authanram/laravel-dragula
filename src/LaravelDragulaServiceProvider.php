<?php

namespace Authanram\LaravelDragula;

use Authanram\LaravelDragula\Commands\LaravelDragulaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDragulaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-dragula')
            ->hasConfigFile()
            ->hasViews();
    }
}
