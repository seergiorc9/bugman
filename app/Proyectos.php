<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table = 'proyectos';
    protected $fillable = ['nombre_proyecto', 'estado_id'];
    protected $casts = [
        'incidencias_id' => 'array'
    ];
}
