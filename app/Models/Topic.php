<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['chapter_id', 'name'];

    public function chapter()
    {
        return $this->belongsTo('App\Models\Chapter');
    }

    public function exams()
    {
        return $this->hasMany('App\Models\Exam');
    }

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
