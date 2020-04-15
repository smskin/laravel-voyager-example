<?php

namespace App\DBContext;

use \TCG\Voyager\Models\Post as BasePost;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Post extends BasePost
{
    use Translatable;
    use Resizable;
}
