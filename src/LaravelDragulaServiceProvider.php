<?php

namespace Authanram\LaravelDragula;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDragulaServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/authanram/laravel-dragula'),
        ], 'dragula-assets');
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-dragula')
            ->hasConfigFile()
            ->hasViews('laravel-dragula')
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile();
            });
    }
}
