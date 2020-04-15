<?php

namespace App\Providers;

use App\DBContext\Page;
use App\DBContext\Post;
use App\DBContext\User;
use Exception;
use Illuminate\Support\ServiceProvider;
use Voyager;

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
        Voyager::useModel('App\DBContext\User', User::class);
        Voyager::useModel('App\DBContext\Page', Page::class);
        Voyager::useModel('App\DBContext\Post', Post::class);
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
