<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Importante añadir esto

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Esto fuerza a Laravel a generar links HTTPS en Render
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}