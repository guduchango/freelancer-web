<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GeoLocationService;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(GeoLocationService::class, function ($app) {
            return new GeoLocationService(new Client());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
