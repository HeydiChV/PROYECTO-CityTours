<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RegionTuristica;


class LugarTuristico extends Model
{
    protected $table = 'lugares_turisticos'; // Nombre de la tabla en la base de datos

    protected $fillable = ['nombre', 'descripcion', 'region']; // Columnas que se pueden llenar mediante asignación en masa

    // Relaciones con otras tablas si es necesario
    // Ejemplo de relación con la tabla RegionesTuristicas
    public function regionTuristica()
    {
        return $this->belongsTo(RegionTuristica::class, 'region_id');
    }
}
