<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogType extends Model
{
    protected $fillable = ['name'];

    public function blogs()
    {
        return $this->hasMany('App\Models\Blog');
    }
}
