<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleospuestos extends Model
{
    use SoftDeletes;
    protected $table = 'empleopuestos';
    protected $fillable = ['id', 'idPuesto', 'idCandidato', 'deleted_at'];
    protected $dates = ['deleted_at'];

    public function puestos() {
        return $this->belongsToMany(\App\Models\Puestos::class, 'empleopuestos', 'idCandidato', 'idPuesto');
    }

    public function empleopuestos() {
        return $this->hasMany(\App\Models\Empleos::class, 'idCandidato', 'id');
    }
}