<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'code', 'region_id'];

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function teachers()
    {
        return $this->hasMany('App\Models\Teacher');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
}
