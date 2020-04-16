<?php

namespace App\DBContext;

use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{
    public $table = 'tags';

    protected $fillable = ['slug','name'];
}
