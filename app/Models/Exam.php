<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['topic_id', 'teacher_subject_id', 'name', 'pass_percent', 'duration'];

    public function topic()
    {
        return $this->belongsTo('App\Models\Topic');
    }

    public function teacherSubject()
    {
        return $this->belongsTo('App\Models\TeacherSubject');
    }

    public function tests()
    {
        return $this->hasMany('App\Models\Test');
    }
}
