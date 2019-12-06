<?php

namespace CNetic\Przelewy24\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

/**
* Payment service provider
*
* @author    Dariusz Męciński
* @copyright 2019 CNetic Software
*/
class Przelewy24ServiceProvider extends ServiceProvider
{

  /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'cnetic-przelewy24');
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'cnetic-przelewy24');
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

        Event::listen('bagisto.admin.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('cnetic-przelewy24::layouts.style');
        });

        Event::listen('bagisto.admin.layout.body.after', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('cnetic-przelewy24::layouts.js');
        });
    }




    /**
       * Register package config.
       *
       * @return void
       */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethod.php',
            'paymentmethods'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php',
            'core'
        );
    }
}
