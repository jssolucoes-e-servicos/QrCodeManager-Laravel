<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
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
      'cnpj', 'name', 'ie', 'phone1', 'phone2', 'email', 'cep',
      'public_place', 'number', 'complement', 'district', 'alias',
      'city', 'uf', 'status', 'role', 'password', 'avatar', 'group_default'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
  {
    $this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;
  }
}
