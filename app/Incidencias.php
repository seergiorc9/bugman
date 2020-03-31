<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    protected $table = 'incidencias';
    protected $fillable = ['nombre_incidencia', 'proyecto_id','detalles','responsable_id','estadoindi_id'];
}
