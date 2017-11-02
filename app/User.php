<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $name;
    protected $age;
    protected $email;
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

    public function diaries()
    {
        return $this->hasMany('App\Models\Diary', 'user_id');
    }

    public function name()
    {
        return $this->name;
    }

    public function age()
    {
        return $this->age;
    }

    public function email()
    {
        return $this->email;
    }
}
