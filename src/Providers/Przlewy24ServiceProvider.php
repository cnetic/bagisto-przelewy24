<?php

namespace CNetic\Payment\Providers;
use Illuminate\Support\ServiceProvider;

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
