<?php

namespace App\DBContext;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public $table = 'polls';

    protected $fillable = ['slug','name','author_id'];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }
}
