<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind('first_service_provider',function($app){
             dd('This is my first service helper');
        });

        app()->bind('second_service_provider',function($app){
            dd('This is my second service container');
       });

       app()->bind('third_service_provider',function($app){
        dd('This is my third service container');
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
