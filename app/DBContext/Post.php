<?php

namespace App\DBContext;

use Illuminate\Database\Eloquent\Builder;
use \TCG\Voyager\Models\Post as BasePost;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Post extends BasePost
{
    use Translatable;
    use Resizable;

    /** @noinspection PhpUnused */
    public function scopeIsOwner(Builder $builder, User $user = null): Builder
    {
        if (!$user){
            $user = auth()->user();
        }
        if (!$user){
            abort(401);
        }

        return $builder->where('author_id', $user->id);
    }
}
