<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $fillable = ['estado', 'nombreCliente', 'apellidoCliente', 'DUICliente', 'emailCliente', 'telefonoCliente',
        'nombreProducto', 'precio', 'fabricante', 'idSucursal', 'image', 'mensajeOpcional', 'spec1', 'spec2', 'spec3', 'spec4', 'fechaDeVigencia'];
    protected $dates = ['deleted_at'];

    public function reservaUsuarios(){
        return $this->belongsTo(\App\User::class, 'idUsuario', 'id');
    }

    public function centro(){
        return $this->belongsToMany(\App\Models\Centros::class, 'reservacentro', 'idReserva', 'idCentro');
    }

    public function centroreservas(){
        return $this->hasMany(\App\Models\ReservaCentro::class, 'idReserva', 'id');
    }
}
