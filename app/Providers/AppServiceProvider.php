<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Import helpers file resources/helpers/business_helpers.php
        require_once resource_path("helpers/business_helpers.php");
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
