<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use Notifiable;

    protected $fillable = [
      'name', 'email', 'avatar', 'password'
    ];

    protected $hidden = [
      'password', 'remember_token'
    ];
}
