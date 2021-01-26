<?php

namespace Apsg\Pdfable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Apsg\Pdfable\Commands\PdfableCommand;

class PdfableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pdfable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pdfable_table')
            ->hasCommand(PdfableCommand::class);
    }
}
