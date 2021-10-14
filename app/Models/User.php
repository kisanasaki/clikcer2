<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

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
    //管理者アカウント(0)か一般アカウント(1)かを判別する
    public static function Authcheck(){
      $id = Auth::id();
      $Auth = User::select('auth')
      ->where('id',$id)
      ->get();
      $auth =$Auth->toArray();
      $authcheck = $auth[0]['auth'];
      return $authcheck;
    }
}
