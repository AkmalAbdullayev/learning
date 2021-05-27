<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable  = [
        'title', 'content', 'language_id'
    ];

    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }
}
