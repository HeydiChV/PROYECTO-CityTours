<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'paquete_turistico_id',
        'user_id',
        'fecha_reserva',
        'cantidad_personas',
        // Otros campos según sea necesario
    ];

    // Relación con el paquete turístico
    public function paqueteTuristico()
    {
        return $this->belongsTo(PaqueteTuristico::class, 'paquete_turistico_id');
    }

    // Relación con el usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}