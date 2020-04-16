<?php

namespace App\DBContext;

use \TCG\Voyager\Models\Category as BaseCategory;

class Category extends BaseCategory
{
    public $table = 'categories';
}
