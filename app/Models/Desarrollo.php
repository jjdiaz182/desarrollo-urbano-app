<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desarrollo extends Model
{
    use HasFactory;

    protected $fillable = [
        'empresa_id', 'nombre', 'tipo_desarrollo', 'numero_viviendas', 'tipo_vivienda',
        'pais', 'estado', 'municipio', 'alias'
    ];
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function solicitudesVistoBueno()
    {
        return $this->hasMany(SolicitudVistoBueno::class);
    }
}
