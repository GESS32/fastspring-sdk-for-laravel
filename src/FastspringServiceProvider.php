<?php

declare(strict_types=1);

namespace Gess32\FastspringSdk;

use Gess32\FastspringSdk\Facades\FastspringFacadeAccessor;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class FastspringServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    public function register(): void
    {
        $this->app->singleton(FastspringFacadeAccessor::class, FastspringFacadeAccessor::class);
    }

    public function provides(): array
    {
        return [
            FastspringFacadeAccessor::class,
        ];
    }

    protected function registerPublishing(): void
    {
        $this->publishes([
            __DIR__ . '/config/fastspring.php' => config_path('fastspring.php'),
        ], 'fastspring-config');
    }
}
