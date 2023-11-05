<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionTuristica extends Model
{
    protected $table = 'regiones_turisticas'; // Nombre de la tabla en la base de datos

    protected $fillable = ['nombre', 'descripcion']; // Columnas que se pueden llenar mediante asignación en masa

    // Relación con la tabla LugarTuristico
    public function lugaresTuristicos()
    {
        return $this->hasMany(LugarTuristico::class, 'region_id');
    }
}
