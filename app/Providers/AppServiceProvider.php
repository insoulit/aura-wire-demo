<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\Blade::anonymousComponentPath(resource_path('views/component'));
        \Illuminate\Support\Facades\Blade::anonymousComponentPath(resource_path('views/livewire/layout'), 'layout');
    }
}
