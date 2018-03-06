<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservaCentro extends Model
{
    use SoftDeletes;
    protected $table = 'reservacentro';
    protected $fillable = ['id', 'idCentro', 'idReserva', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function centros() {
        return $this->belongsTo(\App\Models\Centros::class, 'idCentro', 'id');
    }

    public function reservas() {
        return $this->belongsTo(\App\Models\Reservas::class, 'idReserva', 'id');
    }
}
