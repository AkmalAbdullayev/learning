<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['exam_id', 'question', 'answers', 'correct'];

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam');
    }

    public function studentTests()
    {
        return $this->hasMany('App\Models\StudentTest');
    }
}
