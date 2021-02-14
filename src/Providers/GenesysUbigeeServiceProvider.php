<?php

namespace GenesysLite\GenesysUbigee\Providers;

use Illuminate\Support\ServiceProvider;

class GenesysUbigeeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/genesysUbigee.php',
            'genesysUbigee'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (function_exists('config_path')) { // function not available and 'publish' not relevant in Lumen
            $this->publishes([
                __DIR__.'/../../config/genesysUbigee.php' => config_path('genesysUbigee.php'),
            ], 'config');
        }
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
