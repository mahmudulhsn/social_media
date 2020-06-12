<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'email', 'password', 'user_id', 'birthday', 'gender', 'phone', 'cover_image'
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
    public function posts() {
        return $this->hasMany('App\Post');
    }
    public function categories() {
        return $this->hasMany('App\Category');
    }
    public function likes() {
        return $this->hasMany('App\Like');
    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    public function friends() {
        return $this->hasMany('App\Friend', 'user_id_1');
    }
    public function friends1() {
        return $this->hasMany('App\Friend', 'user_id_2');
    }
}
