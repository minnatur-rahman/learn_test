<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomeServiceProveder extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        app()->bind('jogfol', function(){
            return new \App\Ripositorrise\jogfol;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
