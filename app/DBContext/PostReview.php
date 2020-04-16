<?php

namespace App\DBContext;

use Auth;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use TCG\Voyager\Models\DataType;


class PostReview extends Model
{
    public $table = 'post_reviews';

    protected $fillable = ['author_id','post_id','parent_id','body'];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function scopeRoot(Builder $builder): Builder
    {
        return $builder->whereNull('parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
}
