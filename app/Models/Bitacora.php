<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table = 'bitacora';
    protected $fillable = ['id', 'idUsuario', 'accion', 'otraInformacion', 'deleted_at'];
}
