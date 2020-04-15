<?php

namespace App\DBContext;

use Illuminate\Database\Eloquent\Model;


class Tag extends Model
{
    protected $fillable = ['slug','name'];
}
