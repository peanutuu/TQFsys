<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function isAdmin(){
        return $this->role=='admin';
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function Course(){
        return $this->hasMany(Course::class);
    }

    public function Tqf3s(){
        return $this->hasMany(Tqf3::class);
    }

    public function Tqf5s(){
        return $this->hasMany(Tqf5::class);
    }
}
