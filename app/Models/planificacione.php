<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planificacione extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_unidad',
        'id_chofer',
        'choferes',
        'observaciones',
        'id_soli',
    ];
}
