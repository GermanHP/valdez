<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centrosproducto extends Model
{
    protected $table = 'centros_producto';
    protected $fillable = ['producto_id', 'centros_id'];

    public function centrosProducto(){
        return $this->belongsTo(\App\Models\Centros::class, 'centros_id', 'id');
    }

    public function productosCentros(){
        return $this->belongsTo(\App\Producto::class, 'producto_id', 'id');
    }
}
