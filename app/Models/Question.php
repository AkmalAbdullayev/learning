<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['lesson_id', 'user_id', 'content', 'reply_id'];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
