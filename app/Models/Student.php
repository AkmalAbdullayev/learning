<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['user_id', 'city_id', 'full_name', 'birthday', 'gender'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function chats()
    {
        return $this->hasMany('App\Models\Chat');
    }

    public function reviewLessons()
    {
        return $this->hasMany('App\Models\ReviewLesson');
    }

    public function studentLessons()
    {
        return $this->hasMany('App\Models\StudentLesson');
    }

    public function studentTests()
    {
        return $this->hasMany('App\Models\StudentTest');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }
}
