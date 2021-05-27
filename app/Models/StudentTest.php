<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentTest extends Model
{
    protected $fillable = ['student_id', 'test_id', 'time_taken', 'chosen'];

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

    public function test()
    {
        return $this->belongsTo('App\Models\Test');
    }
}
