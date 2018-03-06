<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleos extends Model
{
    protected $fillable = ['id', 'nombreCandidato', 'apellidoCandidato', 'edadCandidato', 'emailCandidato', 'DUICandidato', 'direccionCandidato',
        'telefonoCandidato', 'empresa1', 'empresa2', 'experiencia1', 'experiencia2', 'featured_foto', 'id_puesto'];
}
