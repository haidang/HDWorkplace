<?php

namespace HDWorkplace;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MainUsers extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  protected $table = 'mn_users';

  protected $fillable = [
    'name', 'username', 'email', 'password', 'address', 'mobile',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  Public function setPasswordAttribute($password)
  {
     return $this->attributes['password'] = bcrypt($password);
  }
}
