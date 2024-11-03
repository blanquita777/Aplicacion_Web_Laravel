<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'testimonios';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombre_cliente',
        'contenido',
        'calificacion',
    ];
}
