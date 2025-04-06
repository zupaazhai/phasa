<?php

namespace Zupaazhai\Phasa;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Zupaazhai\Phasa\Commands\PhasaCommand;

class PhasaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('phasa')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_phasa_table')
            ->hasCommand(PhasaCommand::class)
            ->hasRoute('web');
    }
}
