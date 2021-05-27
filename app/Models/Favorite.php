<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['lesson_id', 'student_id'];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
