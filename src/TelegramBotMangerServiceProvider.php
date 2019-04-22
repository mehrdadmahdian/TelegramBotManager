<?php

namespace MehrdadMahdian\TelegramBotManger;

use Illuminate\Support\ServiceProvider;

class TelegramBotMangerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'mehrdadmahdian');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'mehrdadmahdian');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/telegrambotmanger.php', 'telegrambotmanger');

        // Register the service the package provides.
        $this->app->singleton('telegrambotmanger', function ($app) {
            return new TelegramBotManger;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['telegrambotmanger'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/telegrambotmanger.php' => config_path('telegrambotmanger.php'),
        ], 'telegrambotmanger.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/mehrdadmahdian'),
        ], 'telegrambotmanger.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/mehrdadmahdian'),
        ], 'telegrambotmanger.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/mehrdadmahdian'),
        ], 'telegrambotmanger.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
