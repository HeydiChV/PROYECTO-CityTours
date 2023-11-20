<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPaqueteTuristico extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'region_id',
        'precio',
        // Otros campos según sea necesario
    ];

    // Relación con la región turística
    public function region()
    {
        return $this->belongsTo(RegionTuristica::class, 'region_id');
    }

    // Relación con las reservas
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
