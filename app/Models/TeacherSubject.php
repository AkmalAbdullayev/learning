<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherSubject extends Model
{
    use SoftDeletes;

    protected $table = "teacher_subjects";

    protected $fillable = ['teacher_id', 'subject_id', 'language', 'name'];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }

    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }

    public function chapters()
    {
        return $this->belongsTo('App\Models\Chapter');
    }

    public function exams()
    {
        return $this->belongsTo('App\Models\Exam');
    }
}
