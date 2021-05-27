<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentLesson extends Model
{
    protected $fillable = ['student_id', 'lesson_id', 'watched_at'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }
}
