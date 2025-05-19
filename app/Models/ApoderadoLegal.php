<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApoderadoLegal extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresa_id', 'nombre', 'sexo', 'rfc', 'curp', 'prefijo', 'titulo', 'cedula', 
        'telefono', 'correo', 'fecha_nacimiento', 'direccion'
    ];

    // Un apoderado pertenece a una empresa
    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function solicitudesVistoBueno()
    {
        return $this->hasMany(SolicitudVistoBueno::class, 'representante_legal_id');
    }

}
