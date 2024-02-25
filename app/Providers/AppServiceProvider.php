<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\App;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //database thake data nia asbo
        // View::share('key', 'value');
    }
}
