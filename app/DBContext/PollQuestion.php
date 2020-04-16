<?php

namespace App\DBContext;

use Illuminate\Database\Eloquent\Model;

class PollQuestion extends Model
{
    public const TYPE_TEXTFIELD = 'TEXTFIELD';
    public const TYPE_SELECT_SINGLE = 'SELECT_SINGLE';
    public const TYPE_SELECT_MULTIPLE = 'SELECT_MULTIPLE';
    public const TYPES = [
        self::TYPE_TEXTFIELD,
        self::TYPE_SELECT_SINGLE,
        self::TYPE_SELECT_MULTIPLE
    ];

    public $table = 'poll_questions';

    protected $fillable = ['poll_id','type','text'];
}
