<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name'];

    public function faq()
    {
        return $this->hasMany('App\Models\Faq');
    }

    public function blog()
    {
        return $this->hasMany('App\Models\Blog');
    }

    public function teacherSubjects()
    {
        return $this->hasMany('App\Models\TeacherSubject');
    }
}
