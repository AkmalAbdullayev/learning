<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['user_id', 'sender_name', 'title', 'content', 'solved_at', 'description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
