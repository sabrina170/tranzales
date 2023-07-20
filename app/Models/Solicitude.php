<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    use HasFactory;
    protected $fillable = [

        // Datos Info Personal
        'codigo_solicitud',
        'fecha_solicitud',
        'cliente',
        'fecha_traslado',
        'origen',
        'hora',
        'cantidad',
        'datos_destinos',
        'datos_cantidad',
        'observaciones',
        'estado',
        'costo',
        'id_plani',
        'id_cierre',
        'lavado',
        'comprobante'
    ];
}
