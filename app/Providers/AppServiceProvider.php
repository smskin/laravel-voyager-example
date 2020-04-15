<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;
use \App\Voyager\ServiceProvider as VoyagerServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     * @throws Exception
     */
    public function register()
    {
        $this->app->register(VoyagerServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
