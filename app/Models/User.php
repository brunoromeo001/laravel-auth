<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
use Illuminate\Support\Facades\Auth;
use Hash;

use Illuminate\Http\Request;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array<int, string>
  */

  protected $table = 'test_usuarios';

  protected $fillable = [
    'usuario',
    'email',
    'username',
    'senha',
    'nome',
    'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'senha',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

}

