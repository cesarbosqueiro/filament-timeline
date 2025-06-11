<?php

namespace Bosqro\Timeline;

use Bosqro\Timeline\Pages\TimelinePage;
use Filament\Contracts\Plugin;
use Filament\Panel;

class TimelinePlugin implements Plugin
{
    public function getId(): string
    {
        return 'timeline';
    }

    public function register(Panel $panel): void
    {
        $panel->pages([
            TimelinePage::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        // Aqui podemos adicionar lógica de boot se necessário
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
