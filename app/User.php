<?php

namespace App;

use App\Models\Chat;
use App\Models\Role;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role_id', 'api_token', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function teachers()
    {
        return $this->hasMany('App\Models\Teacher');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

    public function messages()
    {
        return $this->hasMany(Chat::class);
    }

    public function isAdmin()
    {
        return $this->role_id == Role::whereName('admin')->pluck('id')->first();
    }

    public function isActive()
    {
        return $this->status == 1;
    }

    public function isStudent()
    {
        return $this->role_id == Role::whereName('student')->pluck('id')->first();
    }

    public function isTeacher()
    {
        return $this->role_id == Role::whereName('teacher')->pluck('id')->first();
    }

    public function isParent()
    {
        return $this->role_id == Role::whereName('parent')->pluck('id')->first();
    }
}
