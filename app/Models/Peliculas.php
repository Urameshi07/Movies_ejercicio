<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable =[

        'id',
        'titulo_p',
        'director_p',
        'duracion_p',
        'imagen_p',
        'clasificacion',
        'fecha_est_p',
        'fech_fin_p',
        'estatus_p'
    ];
}
