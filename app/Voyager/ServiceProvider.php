<?php

namespace App\Voyager;

use App\DBContext\Category;
use App\DBContext\Menu;
use App\DBContext\Page;
use App\DBContext\Post;
use App\DBContext\Role;
use App\DBContext\User;
use Exception;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Voyager;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * @return void
     * @throws Exception
     */
    public function register()
    {
        Voyager::useModel('User', User::class);
        Voyager::useModel('Page', Page::class);
        Voyager::useModel('Post', Post::class);
        Voyager::useModel('Role', Role::class);
        Voyager::useModel('Category', Category::class);
        Voyager::useModel('Menu', Menu::class);
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
