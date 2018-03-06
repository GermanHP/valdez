<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Producto extends Model
{
    use Notifiable;
    use Searchable;

    protected $fillable = ['nombre', 'fabricante', 'url', 'featured_img', 'category_id', 'category_client_id', 'precioEs', 'precioPromoEs',
        'stock', 'caracteristica1', 'caracteristica2', 'caracteristica3', 'caracteristica4'];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }

    public function reserva(){
        return $this->belongsToMany(\App\Models\Reservaproductos::class, 'reserva_producto_usuario', 'idReserva', 'idProducto', 'idUsuario');
    }

    public function categoryClient()
    {
        return $this->belongsTo(\App\Models\CategoryClient::class, 'category_client_id', 'id');
    }

    public function centros()
    {
        return $this->belongsToMany('App\Models\Centros');
    }

    public function searchableAs()
    {
        return 'products_index';
    }
}
