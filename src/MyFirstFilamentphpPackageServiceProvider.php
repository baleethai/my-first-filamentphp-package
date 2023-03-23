<?php

namespace Baleethai\MyFirstFilamentphpPackage;

use Filament\Navigation\UserMenuItem;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class MyFirstFilamentphpPackageServiceProvider extends PluginServiceProvider
{
    public static string $name = 'my-first-filamentphp-package';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-my-first-filamentphp-package' => __DIR__.'/../resources/dist/my-first-filamentphp-package.css',
    ];

    protected array $scripts = [
        'plugin-my-first-filamentphp-package' => __DIR__.'/../resources/dist/my-first-filamentphp-package.js',
    ];

     protected array $beforeCoreScripts = [
         'plugin-my-first-filamentphp-package' => __DIR__ . '/../resources/dist/my-first-filamentphp-package.js',
     ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
                ->hasConfigFile()
                ->hasViews();
    }

    protected function getUserMenuItems(): array
    {
        return [
            UserMenuItem::make()
                ->label('Settings')
                ->url(route('filament.pages.settings'))
                ->icon('heroicon-s-cog'),
        ];
    }

}
