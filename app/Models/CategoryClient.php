<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryClient extends Model
{
    protected $table = 'category_client';

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
