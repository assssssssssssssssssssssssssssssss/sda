<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Validator;



class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
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

    
    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function book(){
        return $this->hasMany('App\Book');
    }

    public static function validate($input){

        $rules = array(
            'username' => 'required|min:3|max:50|alphanum|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|between:4,10|confirmed|alphanum',
            'password_confirmation' => 'required|between:4,10'
        );

        return Validator::make($input, $rules);
    }
}
