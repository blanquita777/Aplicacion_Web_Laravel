<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'reservas';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'nombre_cliente',
        'email',
        'telefono',
        'fecha_hora',
        'comentarios',
    ];
}
