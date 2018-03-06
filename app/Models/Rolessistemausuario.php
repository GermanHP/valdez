<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rolessistemausuario extends Model
{
    use SoftDeletes;
    protected $table = 'roles_sistema_usuario';
    protected $fillable = ['id', 'idRolSistema', 'idUsuario', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function rolessistema() {
        return $this->belongsTo(\App\Models\Rolessistema::class, 'idRolSistema', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\User::class, 'idUsuario', 'id');
    }
}
