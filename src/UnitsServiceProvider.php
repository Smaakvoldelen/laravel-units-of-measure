<?php

namespace Smaakvoldelen\Units;

use Smaakvoldelen\Units\Commands\UnitsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UnitsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-unit-of-measure')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-unit-of-measure_table')
            ->hasCommand(UnitsCommand::class);
    }
}
