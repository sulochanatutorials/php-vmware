<?php

namespace VmWare\VmWareClient;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VmWareClientServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('vmware-php-client')->hasConfigFile();
    }
}
