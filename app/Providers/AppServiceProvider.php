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
        Voyager::useModel('User', User::class);
        Voyager::useModel('Page', Page::class);
        Voyager::useModel('Post', Post::class);
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
