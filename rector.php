<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withRootFiles()

    ->withPhpSets()
    ->withPreparedSets(codeQuality: true, doctrineCodeQuality: true, symfonyCodeQuality: true, deadCode: true, codingStyle: true, instanceOf: true, typeDeclarations: true)
    ->withImportNames(importShortClasses: false)
    ->withAttributesSets(all: true)
    ->withSets([
        // activate when doing updates:
        // SymfonyLevelSetList::UP_TO_SYMFONY_63,
        // sulu rules
        // activate for updates when doing updates:
        // SuluLevelSetList::UP_TO_SULU_25,
    ])
    // symfony rules
    ->withSymfonyContainerPhp(__DIR__ . '/var/cache/website/dev/App_KernelDevDebugContainer.xml')
    ->withPHPStanConfigs([
        __DIR__ . '/phpstan.dist.neon',
        // rector does not load phpstan extension automatically so require them manually here:
        __DIR__ . '/vendor/phpstan/phpstan-doctrine/extension.neon',
        __DIR__ . '/vendor/phpstan/phpstan-symfony/extension.neon',
    ]);
