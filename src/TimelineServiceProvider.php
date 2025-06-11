<?php

namespace Bosqro\Timeline;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TimelineServiceProvider extends PackageServiceProvider
{
    public static string $name = 'timeline';

    public static string $viewNamespace = 'timeline';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasViews(static::$viewNamespace);
    }
}
