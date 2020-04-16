<?php

namespace App\Voyager\Http\Controllers;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Http\Request;

class PostController extends VoyagerBaseController
{
    protected $slug = 'posts';

    public function index(Request $request)
    {
        return parent::index($request);
    }

    protected function applyIndexQueryBuilder(EloquentBuilder $model): void
    {
        $scopes = [];

        $user = auth()->user();
        /** @noinspection PhpUndefinedMethodInspection */
        if (!$user->hasPermission('browse_all_posts')){
            $scopes[] = 'isOwner';
        }

        foreach ($scopes as $scope){
            $model->{$scope}();
        }
    }
}
