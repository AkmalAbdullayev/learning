<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewLesson extends Model
{
    protected $fillable = ['student_id', 'lesson_id', 'rate', 'review'];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
