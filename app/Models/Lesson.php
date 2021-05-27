<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['teacher_id', 'topic_id', 'status', 'content', 'confirmed_by', 'uploaded_at'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function topic()
    {
        return $this->belongsTo('App\Models\Topic');
    }

    public function confirmedBy()
    {
        return $this->belongsTo('App\User', 'confirmed_by');
    }

    public function lessonContent()
    {
        return $this->hasMany('App\Models\LessonContent');
    }

    public function reviewLesson()
    {
        return $this->hasMany('App\Models\ReviewLesson');
    }

    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }

    public function question()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function studentLesson()
    {
        return $this->hasMany('App\Models\StudentLesson');
    }
}
