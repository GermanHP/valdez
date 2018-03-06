<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centros extends Model
{
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Centrosproducto::class, 'centros_producto', 'producto_id', 'centros_id');
    }

    public function reserva(){
        return $this->belongsToMany(\App\Models\Reservas::class, 'reservacentro', 'idCentro', 'idReserva');
    }

    public function rolessistemausuarios(){
        return $this->hasMany(\App\Models\ReservaCentro::class, 'idCentro', 'id');
    }
}
