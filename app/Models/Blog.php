<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'blog_type_id', 'title', 'content', 'publish_date', 'language_id'
    ];

    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }

    public function blogType()
    {
        return $this->belongsTo('App\Models\BlogType');
    }
}
