<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Reservaproductos extends Model
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'reserva_producto_usuario';
    protected $fillable = ['idReserva', 'idProducto', 'idUsuario'];
    protected $dates = ['deleted_at'];

    public function reservaProductos(){
        return $this->belongsTo(\App\Producto::class, 'idProducto', 'id');
    }

    public function reservaUsuarios(){
        return $this->belongsTo(\App\User::class, 'idUsuario', 'id');
    }

    public function reserva(){
        return $this->belongsTo(\App\Models\Reservas::class, 'idReserva', 'id');
    }
}
