<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = ['teacher_id', 'teacher_subject_id', 'name'];

    public function topics()
    {
        return $this->hasMany('App\Models\Topic');
    }

    public function teacher()
    {
        return $this->hasMany('App\Models\Teacher');
    }

    public function teacherSubject()
    {
        return $this->hasMany('App\Models\TeacherSubject');
    }
}
