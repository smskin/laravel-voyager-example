<?php

namespace App\DBContext;

use Auth;
use Illuminate\Database\Eloquent\Model;

class PollQuestionAnswer extends Model
{
    public $table = 'poll_question_answers';

    protected $fillable = ['poll_id','question_id','text'];
}
