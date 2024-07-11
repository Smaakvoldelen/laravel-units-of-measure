<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Exception\Configuration\InvalidConfigurationException;
use RectorLaravel\Set\LaravelSetList;

try {
    return RectorConfig::configure()
        ->withPaths([
            __DIR__.'/config',
            __DIR__.'/src',
            __DIR__.'/tests',
        ])
        ->withPhpSets(php82: true)
        ->withSets([
            LaravelSetList::LARAVEL_110,
        ]);
} catch (InvalidConfigurationException $e) {
    //
}
