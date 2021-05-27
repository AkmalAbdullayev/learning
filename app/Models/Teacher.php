<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Teacher extends Model
{
    protected $fillable = [
        'user_id', 'city_id', 'full_name', 'birthday', 'address', 'avatar',
        'biography', 'education_level', 'experience', 'gender', 'phone', 'school'
    ];

    protected $with = ['subjects'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function subjects()
    {
        return $this->hasMany('App\Models\TeacherSubject' , 'teacher_id');
    }

    public function chapters()
    {
        return $this->belongsTo('App\Models\Chapter');
    }

    public function chats()
    {
        return $this->belongsTo('App\Models\Chat');
    }

    public function lessons()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

    public static function uploadImage($teacher, $image)
    {
        try {
            $filename = time().'.'.$image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('teachers/avatars', $image, $filename);
            $teacher->avatar = 'teachers/avatars/'.$filename;
            $teacher->save();
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}
