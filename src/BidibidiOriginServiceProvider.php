<?php
/*
Package         :   Bidibidi Origin
Filename        :   BidibidiOriginServiceProvider.php
Descriptions    :   Service provider. 

Publishes       :   php artisan vendor:publish --tag=config
*/

namespace Bidibidi\Origin;

use Illuminate\Support\ServiceProvider;

class BidibidiOriginServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        
        $this->publishes([__DIR__ . '/views'  => resource_path('views/vendor/bidibidi-origin')], 'origin-views');
        $this->publishes([__DIR__ . '/lang'   => resource_path('lang/vendor/bidibidi-origin')], 'origin-lang');
        $this->publishes([__DIR__ . '/assets' => public_path('vendor/bidibidi-origin'),], 'origin-public');
        $this->publishes([__DIR__ . '/config' => config_path()], 'origin-config');

        $this->loadViewsFrom(__DIR__ . '/views', 'bidibidi-origin');
        $this->loadTranslationsFrom(__DIR__.'/lang', 'bidibidi-origin-lang');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         $this->mergeConfigFrom(__DIR__ . '/config/bidibidi-origin-config.php', 'bidibidi-origin-config');
    }
}
