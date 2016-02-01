<?php

namespace Kevin\Xinge;

use Illuminate\Support\ServiceProvider;

class PushServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Config/config.php' => config_path('xinge.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/Config/config.php', 'xinge');

        $this->app['xinge'] = $this->app->share(function($app) {
            $config = $app['config']['xinge'];
           return new XingeWrapper($config);
        });
    }
}
