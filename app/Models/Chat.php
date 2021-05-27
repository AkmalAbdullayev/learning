<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['student_id', 'teacher_id', 'message', 'read_at'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
