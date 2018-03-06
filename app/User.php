<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['nombre', 'apellido', 'fechaDeNacimiento', 'genero', 'DUI', 'email', 'telefono', 'password', 'resetPassword', 'TokenPush', 'remember_token', 'deleted_at'];
    protected $dates = ['deleted_at'];
    protected $hidden = ['password', 'remember_token', 'email', 'TokenPush', 'DUI', 'resetPassword'];

    public function rolessistema(){
        return $this->belongsToMany(\App\Models\Rolessistema::class, 'roles_sistema_usuario', 'idUsuario', 'idRolSistema');
    }

    public function rolessistemausuarios(){
        return $this->hasMany(\App\Models\Rolessistemausuario::class, 'idUsuario', 'id');
    }
}