<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rolessistema extends Model
{
    use SoftDeletes;
    protected $table = 'roles_sistema';
    protected $fillable = ['id', 'nombre', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function users(){
        return $this->belongsToMany(\App\User::class, 'roles_sistema_usuario', 'idRolSistema', 'idUsuario');
    }

    public function rolessistemausuarios(){
        return $this->hasMany(\App\Models\Rolessistemausuario::class, 'idRolSistema', 'id');
    }
}
